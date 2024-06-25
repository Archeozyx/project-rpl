<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $pendingOrders = Order::where('status', 'pending')->count();
        $totalUsers = User::count();

        return view('admin.dashboard', compact('pendingOrders', 'totalUsers'));
    }

    public function editablePages()
    {
        $pages = Page::all();
        return view('admin.editable-pages', compact('pages'));
    }

    public function pageInfo($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $content = $page->content;
        $images = $page->images;

        return view('admin.page', compact('page', 'content', 'images'));
    }

    public function updatePageInfo(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $page->content = $request->input('content');

        // Handle image updates
        $updatedImages = $request->input('images', []);
        $existingImages = $page->images ?? [];

        foreach ($updatedImages as $key => $imageData) {
            if (isset($existingImages[$key])) {
                $existingImages[$key]['data'] = $imageData;
            } else {
                $existingImages[] = ['data' => $imageData];
            }
        }

        $page->images = $existingImages;
        $page->save();

        return response()->json(['success' => true]);
    }

    public function uploadImage(Request $request)
    {
        $image = $request->file('image');
        $imageData = base64_encode(file_get_contents($image));

        return response()->json(['data' => $imageData]);
    }

    public function orderReport(Request $request)
    {
        
        $search = $request->input('search');
        $perPage = 15; // Number of reports to display per page
        
        $orders = Order::query();
        
        if ($search) {
            $orders->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('event', 'like', '%' . $search . '%')
                    ->orWhere('status', 'like', '%' . $search . '%');
            });
        }
    
        $orders = $orders->paginate($perPage);
    
        return view('admin.report', compact('orders', 'search'));
    }

    public function editReport(Order $order)
    {
        return view('admin.edit-report', compact('order'));
    }

    public function updateReport(Request $request, Order $order)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'event' => 'required',
            'tickets' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'status' => 'required|in:pending,approved,rejected',
        ]);

        // Update the report
        $order->name = $validatedData['name'];
        $order->email = $validatedData['email'];
        $order->phone = $validatedData['phone'];
        $order->event = $validatedData['event'];
        $order->tickets = $validatedData['tickets'];
        $order->date = $validatedData['date'];
        $order->time = $validatedData['time'];
        $order->status = $validatedData['status'];
        $order->save();

        return redirect()->route('admin.report')->with('success', 'Report updated successfully.');
    }

    public function users(Request $request)
    {
    $search = $request->input('search');
    $perPage = 15; // Number of users to display per page

    $users = User::query();

    if ($search) {
        $users->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    $users = $users->paginate($perPage);

    return view('admin.users', compact('users', 'search'));
    }

    public function createUser()
    {
        return view('admin.create-user');
    }

    public function storeUser(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'privilege' => 'required|in:admin,user',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->privilege = $validatedData['privilege'];
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function editUser(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
            'privilege' => 'required|in:admin,user',
        ]);

        // Update the user
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
        $user->privilege = $validatedData['privilege'];
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}