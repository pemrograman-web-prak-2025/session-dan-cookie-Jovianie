<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('user')->latest()->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required|in:hilang,ditemukan',
            'lokasi' => 'required|max:255',
            'tanggal' => 'required|date',
            'nama_pelapor' => 'required|max:255',
            'kontak' => 'required|max:255',
        ]);

        $validated['status'] = $request->kategori;
        $validated['user_id'] = $request->user()->id;

        Item::create($validated);

        return redirect()->route('items.index')->with('success', 'Laporan berhasil ditambahkan!');
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required|in:hilang,ditemukan',
            'lokasi' => 'required|max:255',
            'tanggal' => 'required|date',
            'nama_pelapor' => 'required|max:255',
            'kontak' => 'required|max:255',
            'status' => 'required|in:hilang,ditemukan,selesai',
        ]);

        $item->update($validated);

        return redirect()->route('items.index')->with('success', 'Laporan berhasil diupdate!');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Laporan berhasil dihapus!');
    }
}