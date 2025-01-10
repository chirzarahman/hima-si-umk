<?php
// CHIRZA RAHMAN (202253048)
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;

class GuestController extends Controller
{
    public function index()
    {
        // $users = User::count();
        $departments = Department::all();
        $events = Event::all();
        return view('beranda', compact('departments', 'events'));
    }

    public function show($id)
    {
        $event = Event::find($id);
        // return view('detail', ["event" => Event::find(1)]);
        return view('detail', compact('event'));
    }
}