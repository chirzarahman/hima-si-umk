<?php
// CHIRZA RAHMAN (202253048)
namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::where('email', '!=', 'admin@mail.com')->count();
        $departments = Department::count();
        $events = Event::count();
        return view('dashboard.index', ["title" => "Himapro SI UMK"], compact('users', 'departments', 'events'));
    }
}