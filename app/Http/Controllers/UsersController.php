<?php
// CHIRZA RAHMAN (202253048)
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('email', '!=', 'admin@mail.com')->get();
        return view('dashboard.users.index', ["title" => "Himapro SI UMK"], compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::select('id', 'nama')->get();
        return view('dashboard.users.create', ["title" => "Himapro SI UMK"], compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => ['required', 'min:9', 'max:9', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'departemen_id' => 'required|exists:departments,id',
            'jabatan' => 'required|max:255',
            'angkatan' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('foto')) {
            $photoPath = $request->file('foto')->store('users', 'public');
            $input['foto'] = $photoPath;
        }

        User::create($input);
        return redirect()->route('users.index')->with('success', 'Anggota berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', ["title" => "Himapro SI UMK"], compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $departments = Department::select('id', 'nama')->get();
        return view('dashboard.users.edit', ["title" => "Himapro SI UMK"], compact('user', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'nim' => ['required', 'min:9', 'max:9', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'departemen_id' => 'required|exists:departments,id',
            'jabatan' => 'required|max:255',
            'angkatan' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required',
        ]);

        $input = $request->all();
        
        if ($request->hasFile('foto')) {
            if ($user->foto) {
                Storage::disk('public')->delete($user->foto);
            }
            $photoPath = $request->file('foto')->store('users', 'public');
            $input['foto'] = $photoPath;
        } else {
            unset($input['foto']);
        }

        $user->update($input);
        return redirect()->route('users.index')->with('success', 'Anggota berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->foto) {
            Storage::disk('public')->delete($user->foto);
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Anggota berhasil didelete');
    }
}