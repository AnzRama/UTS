@extends('layout.master')
@section('title','Data kembali')
@section('menukembali','active')

@section('content')

<div class="container pt-5 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Pencatatan Pengembalian</h1>
      <hr>

      <form action="{{ route('kembalis.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="judul_buku">Judul Buku</label>
          <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" name="judul_buku" value="{{ old('judul_buku') }}">
          @error('judul_buku')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama_peminjam">Nama Peminjam</label>
          <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" value="{{ old('nama_peminjam') }}">
          @error('nama_peminjam')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="tgl_pinjam">Tanggal Pinjam</label>
          <input type="date" class="form-control" id="tgl_pinjam" rows="3" name="tgl_pinjam">{{ old('tgl_pinjam') }}</textarea>
        </div>

        <div class="form-group">
          <label for="tgl_kembali">Tanggal Kembali</label>
          <input type="date" class="form-control" id="tgl_kembali" rows="3" name="tgl_kembali">{{ old('tgl_kembali') }}</textarea>
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <select class="form-control" name="status" id="status">
            <option value="Pinjam" {{ old('status')=='Pinjam' ? 'selected': '' }}>
              Pinjam
            </option>
            <option value="Kembali" {{ old('status')=='Kembali' ? 'selected': '' }}>
              Kembali
            </option>
            <option value="Terlambat" {{ old('status')=='Terlambat' ? 'selected': '' }}>
              Terlambat
            </option>
            <option value="Hilang" {{ old('status')=='Hilang' ? 'selected': '' }}>
              Hilang
            </option>
          </select>
          @error('status')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="denda">Denda</label>
          <input type="text" class="form-control" id="denda" rows="3" name="denda">{{ old('denda') }}</input>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Simpan</button>
        <br>
        <a href="{{route('kembalis.index')}}" class="btn btn-warning">Kembali</a>
      </form>

    </div>
  </div>
</div>
@endsection