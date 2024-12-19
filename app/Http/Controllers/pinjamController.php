<?php

namespace App\Http\Controllers;

use App\Models\pinjam;
use illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class pinjamController extends Controller
{
    //membuat index
    public function index()
    {
        $pinjams = pinjam::all();
        return view('pinjam.index', ['pinjams' => $pinjams]);
    }

    public function create()
    {
        return view("pinjam.create");
    }

    public function store(Request $request)
    {


        $validateData = $request->validate([
            'judul_buku'          => 'required',
            'nama_peminjam'           => 'required',
            'tgl_pinjam' => 'required',
            'status'        => '',
            
        ]);
        pinjam::create($validateData);
        $request->session()->flash('pesan', 'penambahan data berhasil');
        return redirect()->route('pinjams.index');
        // return message
    }

    public function show(pinjam $pinjam)
    {
        return view('pinjam.show', ['pinjam' => $pinjam]);
    }

    public function edit(pinjam $pinjam)
    {
        return view('pinjam.edit', ['pinjam' => $pinjam]);
    }

    public function update(Request $request, pinjam $pinjam)
    {
        $validateData = $request->validate([
            'judul_buku'          => 'required',
            'nama_peminjam'           => 'required',
            'tgl_pinjam' => '',
            'status'        => '',

        ]);
        $pinjam->update($validateData);
        return redirect()->route('pinjams.show', ['pinjam' => $pinjam->id])
            ->with('pesan', "Update Data {$validateData['judul_buku']} berhasil");
    }

    public function destroy(pinjam $pinjam)
    {
        $pinjam->delete();
        return redirect()->route('pinjams.index')
            ->with('pesan', "Hapus Data $pinjam->nama Berhasil");
    }
}
