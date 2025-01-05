<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::all();
        return view('dashboard.documents.index', ["title" => "Himapro SI UMK"], compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.documents.create', ["title" => "Himapro SI UMK"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('documents', 'public');
            $input['file'] = $filePath;
        }

        Document::create($input);
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        return view('dashboard.documents.show', ["title" => "Himapro SI UMK"], compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('dashboard.documents.edit', ["title" => "Himapro SI UMK"], compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('file')) {
            if ($document->file) {
                Storage::disk('public')->delete($document->file);
            }
            $filePath = $request->file('file')->store('documents', 'public');
            $input['file'] = $filePath;
        } else {
            unset($input['file']);
        }

        $document->update($input);
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        if ($document->file) {
            Storage::disk('public')->delete($document->file);
        }
        $document->delete();
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil didelete');
    }
}