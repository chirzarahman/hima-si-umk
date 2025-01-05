<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $departments = Department::count();
        $events = Event::count();
        return view('dashboard.index', ["title" => "Himapro SI UMK"], compact('users', 'departments', 'events'));
    }
}