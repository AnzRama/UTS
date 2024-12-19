@extends('layout.master')
@section('title','Data kembali')
@section('menukembali','active')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-12">

      <div class="py-5 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">List Pengembalian</h2>
        <a href="{{ route('kembalis.create')}}" class="btn btn-primary">Tambah</a>
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
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Denda</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($kembalis as $kembali)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$kembali->judul_buku}}</td>
            <td>{{$kembali->nama_peminjam}}</td>
            <td>{{$kembali->tgl_pinjam}}</td>
            <td>{{$kembali->tgl_kembali}}</td>
            <td>{{$kembali->status}}</td>
            <td>{{$kembali->denda}}</td>
            <td> <a href="{{ route('kembalis.show', ['kembali' => $kembali->id])}}">
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