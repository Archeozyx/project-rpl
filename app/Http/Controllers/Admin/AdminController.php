<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    public function pageInfo($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('admin.page', compact('page'));
    }

    public function updatePageInfo(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        $page->content = $request->input('content');
        $page->save();
        return redirect()->route('admin.page', $slug)->with('success', 'Page updated successfully.');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            return response()->json(['url' => asset('storage/' . $path)]);
        }

        return response()->json(['error' => 'No image found'], 400);
    }

    public function laporanPemesanan()
    {
        
        return view('admin.laporan');
    }

    public function users(Request $request)
{
    $search = $request->input('search');
    $perPage = 10; // Number of users to display per page

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