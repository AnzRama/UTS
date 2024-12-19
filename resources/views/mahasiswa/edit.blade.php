@extends('layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa','active')

@section('content')

  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit Mahasiswa</h1>
        <hr>

        <form action="{{ route('mahasiswas.update',['mahasiswa' => $mahasiswa->id]) }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') ?? $mahasiswa->nim }}">
            @error('nim')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') ?? $mahasiswa->nama }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)
              == 'L' ? 'checked': '' }}>
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ (old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin)
              == 'P' ? 'checked': '' }}>
                <label class="form-check-label" for="perempuan">Perempuan</label>
              </div>
              @error('jenis_kelamin')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>

          <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">

            @error('jurusan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') ?? $mahasiswa->alamat}}</textarea>
          </div>

          <button type="submit" class="btn btn-primary mb-2">Update</button>
          <br>
          <a href="{{ route('mahasiswas.index')}}" class="btn btn-warning">Kembali</a>

        </form>

        @endsection