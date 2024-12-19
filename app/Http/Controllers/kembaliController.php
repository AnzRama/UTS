<?php

namespace App\Http\Controllers;

use App\Models\kembali;
use illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class kembaliController extends Controller
{
    //membuat index
    public function index()
    {
        $kembalis = kembali::all();
        return view('kembali.index', ['kembalis' => $kembalis]);
    }

    public function create()
    {
        return view("kembali.create");
    }

    public function store(Request $request)
    {


        $validateData = $request->validate([
            'judul_buku'          => 'required',
            'nama_peminjam'           => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali'       => 'required',
            'status'        => '',
            'denda'         => ''
            
        ]);
        kembali::create($validateData);
        $request->session()->flash('pesan', 'penambahan data berhasil');
        return redirect()->route('kembalis.index');
        // return message
    }

    public function show(kembali $kembali)
    {
        return view('kembali.show', ['kembali' => $kembali]);
    }

    public function edit(kembali $kembali)
    {
        return view('kembali.edit', ['kembali' => $kembali]);
    }

    public function update(Request $request, kembali $kembali)
    {
        $validateData = $request->validate([
            'judul_buku'          => 'required',
            'nama_peminjam'           => 'required',
            'tgl_pinjam' => '',
            'tgl_kembali'       => '',
            'status'        => '',
            'denda'         => ''
        ]);
        $kembali->update($validateData);
        return redirect()->route('kembalis.show', ['kembali' => $kembali->id])
            ->with('pesan', "Update Data {$validateData['judul_buku']} berhasil");
    }

    public function destroy(kembali $kembali)
    {
        $kembali->delete();
        return redirect()->route('kembalis.index')
            ->with('pesan', "Hapus Data $kembali->nama Berhasil");
    }
}
