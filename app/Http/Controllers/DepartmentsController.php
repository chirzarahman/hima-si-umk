<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Department $department)
    {
        $departments = Department::all();
        return view('dashboard.departments.index', ["title" => "Himapro SI UMK"], compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.departments.create', ["title" => "Himapro SI UMK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'detail' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('departments', 'public');
            $input['icon'] = $iconPath;
        }

        Department::create($input);
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('dashboard.departments.show', ["title" => "Himapro SI UMK"], compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('dashboard.departments.edit', ["title" => "Himapro SI UMK"], compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'detail' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('icon')) {
            if ($department->icon) {
                Storage::disk('public')->delete($department->icon);
            }
            $iconPath = $request->file('icon')->store('departments', 'public');
            $input['icon'] = $iconPath;
        } else {
            unset($input['icon']);
        }

        $department->update($input);
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        if ($department->icon) {
            Storage::disk('public')->delete($department->icon);
        }
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil didelete');
    }
}