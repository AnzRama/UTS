@extends('layout.master')
@section('title','Data Buku')
@section('menubuku','active')

@section('content')

<div class="container mt-5">
  <div class="row">
    <div class="col-12">

      <div class="py-5 d-flex justify-content-end align-items-center">
        <h2 class="mr-auto">List Buku</h2>
        <a href="{{ route('bukus.create')}}" class="btn btn-primary">Tambah</a>
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
            <th>ISBN</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($bukus as $buku)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$buku->isbn}}</td>
            <td>{{$buku->judul}}</td>
            <td>{{$buku->penulis}}</td>
            <td>{{$buku->penerbit}}</td>
            <td>{{$buku->tahun}}</td>
            <td> <a href="{{ route('bukus.show', ['buku' => $buku->id])}}">
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