<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Department $department)
    {
        $departments = Department::all();
        return view('admin.dashboard.departments.index', ["title" => "Himapro SI UMK"], compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.departments.create', ["title" => "Himapro SI UMK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Department $department)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'storages/departments/';
            $iconImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconImage);
            $input['image'] = "$iconImage";
        }

        Department::create($input);
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('admin.dashboard.departments.show', ["title" => "Himapro SI UMK"], compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('admin.dashboard.departments.edit', ["title" => "Himapro SI UMK"], compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();
        
        if ($image = $request->file('image')) {
            $destinationPath = 'storages/departments/';
            $iconImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $iconImage);
            $input['image'] = "$iconImage";
        } else {
            unset($input['image']);
        }

        $department->update($input);
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Departemen berhasil didelete');
    }
}