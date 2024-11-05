<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    function create() {
        return view('user.create');
    }

    function store(Request $request) {
        $request->validate([
            'hakakses' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->hakakses = $request->hakakses;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->save();

        return redirect()->route('user.index');
    }

    function edit($id) {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    function update(Request $request, $id) {
        $request->validate([
            'hakakses' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'password' => '',
        ]);

        $user = User::find($id);
        $user->hakakses = $request->hakakses;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('user.index');
    }

    function delete($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index');
    }
}
