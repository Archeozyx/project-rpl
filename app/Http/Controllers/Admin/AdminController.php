<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.dashboard');
    }

    public function homepageInfo()
    {
        
        return view('admin.homepage');
    }

    public function updateHomepageInfo(Request $request)
    {
        
    }

    public function wisataInfo()
    {
        
        return view('admin.wisata');
    }

    public function updateWisataInfo(Request $request)
    {
        
    }

    public function pemesananInfo()
    {
        
        return view('admin.pemesanan');
    }

    public function updatePemesananInfo(Request $request)
    {
        
    }

    public function laporanPemesanan()
    {
        
        return view('admin.laporan');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
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