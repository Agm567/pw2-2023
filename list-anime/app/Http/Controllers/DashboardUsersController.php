<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('dashboard.users.edit', compact('users'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        if ($request['password'] != null) {
            $password = Hash::make($request['password']);
        } else {
            $password = $request['old_password'];
        }
        User::whereId($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $password,
            'role' => $request['role'],
]);
        return redirect('/dashboard/users')->with('success', 'User is successfully updated');
    }
    public function create()
    {
        return view('dashboard.users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'role' => 'required',
        ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        return redirect('/dashboard/users')->with('success', 'User is successfully saved');
    }

    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/dashboard/users')->with('success', 'User is successfully deleted');
    }
}
