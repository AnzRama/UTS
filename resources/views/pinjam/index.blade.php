@extends('layout.master')
@section('title','Data pinjam')
@section('menupinjam','active')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-12">

      <div class="py-5 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">List pinjam</h2>
        <a href="{{ route('pinjams.create')}}" class="btn btn-primary">Tambah</a>
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
            <th>Judul Buku</th>
            <th>Nama Peminjam</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pinjams as $pinjam)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$pinjam->judul_buku}}</td>
            <td>{{$pinjam->nama_peminjam}}</td>
            <td>{{$pinjam->tgl_pinjam}}</td>
            <td>{{$pinjam->status}}</td>
            <td> <a href="{{ route('pinjams.show', ['pinjam' => $pinjam->id])}}">
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