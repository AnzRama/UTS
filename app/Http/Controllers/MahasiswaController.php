<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //membuat index
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view("mahasiswa.create");
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nim'           => 'required|size:13|unique:mahasiswas',
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => ''
        ]);
        Mahasiswa::create($validateData);
        $request->session()->flash('pesan', 'penambahan data berhasil');
        return redirect()->route('mahasiswas.index');
        // return "Data Berhasil di input ke database mahasiswa";
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validateData = $request->validate([
            'nim'           => 'required|size:13|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama'          => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan'       => 'required',
            'alamat'        => ''
        ]);
        $mahasiswa->update($validateData);
        return redirect()->route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id])
            ->with('pesan', "Update Data {$validateData['nama']} berhasil");
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')
            ->with('pesan', "Hapus Data $mahasiswa->nama Berhasil");
    }

    public function gallery()
    {
        return view('tampilgambar.gallery');
    }

    public function info()
    {
        return view('tampilinfo.informasi');
    }
}
