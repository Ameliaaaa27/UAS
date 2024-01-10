<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Make sure to import your User model

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user_management.index', compact('users'));
    }

    public function create()
    {
        return view('user_management.create');
    }

    public function store(Request $request)
    {
        // Validate and store the user
        // For example:
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Redirect or do something after saving the user
        return redirect()->route('user-management.index');
    }

    // Implement the edit, update, and destroy methods similarly
}
