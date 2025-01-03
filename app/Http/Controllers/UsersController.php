<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard.users.index', ["title" => "Himapro SI UMK"], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.users.create', ["title" => "Himapro SI UMK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => ['required', 'max:9', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            // 'angkatan' => 'required|max:255',
            // 'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        User::create($input);
        return redirect('/data-anggota')->with('success', 'Anggota berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.dashboard.users.show', ["title" => "Himapro SI UMK"], compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.dashboard.users.edit', ["title" => "Himapro SI UMK"], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            // 'email' => 'required',
            // 'password' => 'required|min:5|max:255',
            // 'angkatan' => 'required|max:255',
            // 'jenis_kelamin' => 'required|max:255',
            // 'alamat' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'storages/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $user->update($input);
        return redirect('/data-anggota')->with('success', 'Anggota berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/data-anggota')->with('success', 'Anggota berhasil didelete');
    }
}