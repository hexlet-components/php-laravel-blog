<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = \App\User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function create()
    {
        $user = new \App\User();
        return view('user.create', compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        App\User::create($request->all());
        return redirect()
            ->route('user.index')
            ->with('success', 'Video created successfully');
    }
}
