<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard.events.index', ["title" => "Himapro SI UMK"], compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.events.create', ["title" => "Himapro SI UMK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'lokasi' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'deskripsi' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('poster')) {
            $posterPath = $request->file('poster')->store('events', 'public');
            $input['poster'] = $posterPath;
        }

        Event::create($input);
        return redirect()->route('events.index')->with('success', 'Event berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('dashboard.events.show', ["title" => "Himapro SI UMK"], compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', ["title" => "Himapro SI UMK"], compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'lokasi' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('poster')) {
            if ($event->poster) {
                Storage::disk('public')->delete($event->poster);
            }
            $posterPath = $request->file('poster')->store('events', 'public');
            $input['poster'] = $posterPath;
        } else {
            unset($input['poster']);
        }

        $event->update($input);
        return redirect()->route('events.index')->with('success', 'Event berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->poster) {
            Storage::disk('public')->delete($event->poster);
        }
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil didelete');
    }
}