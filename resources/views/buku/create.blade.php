@extends('layout.master')
@section('title','Data Buku')
@section('menubuku','active')

@section('content')

<div class="container pt-5 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Pencatatan Buku</h1>
      <hr>

      <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="isbn">ISBN</label>
          <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') }}">
          @error('isbn')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
          @error('judul')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="penulis">Penulis</label>
          <textarea class="form-control" id="penulis" rows="3" name="penulis">{{ old('penulis') }}</textarea>
        </div>

        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <textarea class="form-control" id="penerbit" rows="3" name="penerbit">{{ old('penerbit') }}</textarea>
        </div>

        <div class="form-group">
          <label for="tahun">Tahun</label>
          <textarea class="form-control" id="tahun" rows="3" name="tahun">{{ old('tahun') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
        <br>
        <a href="{{route('bukus.index')}}" class="btn btn-warning">Kembali</a>
      </form>

    </div>
  </div>
</div>
@endsection