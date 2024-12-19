<?php

namespace App\Http\Controllers;

use App\Models\buku;
use illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    //membuat index
    public function index()
    {
        $bukus = buku::all();
        return view('buku.index', ['bukus' => $bukus]);
    }

    public function create()
    {
        return view("buku.create");
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'isbn'           => 'required',
            'judul'          => 'required',
            'penulis' => 'required',
            'penerbit'       => 'required',
            'tahun'        => ''
            
        ]);
        buku::create($validateData);
        $request->session()->flash('pesan', 'penambahan data berhasil');
        return redirect()->route('bukus.index');
        // return message
    }

    public function show(buku $buku)
    {
        return view('buku.show', ['buku' => $buku]);
    }

    public function edit(buku $buku)
    {
        return view('buku.edit', ['buku' => $buku]);
    }

    public function update(Request $request, buku $buku)
    {
        $validateData = $request->validate([
            'isbn'           => 'required',
            'judul'          => 'required',
            'penulis' => 'required',
            'penerbit'       => 'required',
            'tahun'        => ''
        ]);
        $buku->update($validateData);
        return redirect()->route('bukus.show', ['buku' => $buku->id])
            ->with('pesan', "Update Data {$validateData['judul']} berhasil");
    }

    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect()->route('bukus.index')
            ->with('pesan', "Hapus Data $buku->nama Berhasil");
    }
}
