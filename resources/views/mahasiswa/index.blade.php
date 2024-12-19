@extends('layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa','active')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-12">

      <div class="py-5 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">Tabel Data Siswa</h2>
        <a href="{{ route('mahasiswas.create')}}" class="btn btn-primary">Tambah</a>
      </div>

      <!-- menampilkan pesan -->
      @if (session()->has('pesan'))
      <div class="alert alert-success">
        {{session()->get('pesan')}}
      </div>
      @endif

      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($mahasiswas as $mahasiswa)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$mahasiswa->nim}}</td>
            <td>{{$mahasiswa->nama}}</td>
            <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
            <td>{{$mahasiswa->jurusan}}</td>
            <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
            <td> <a href="{{ route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id])}}">
                Opsi </a> </td>
          </tr>
          @empty
          <td colspan="6" class="text-center">Tidak ada data...</td>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection