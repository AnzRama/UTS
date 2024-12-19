<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Detail Peminjaman</title>
</head>

<body>

  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit Detail Peminjaman</h1>
        <hr>

        <form action="{{ route('pinjams.update',['pinjam' => $pinjam->id]) }}" method="POST">
          @method('PATCH')
          @csrf

          <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" name="judul_buku" value="{{ old('judul_buku') ?? $pinjam->judul_buku }}">
            @error('judul_buku')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" value="{{ old('nama_peminjam') ?? $pinjam->nama_peminjam }}">
            @error('nama_peminjam')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="tgl_pinjam">Tanggal</label>
            <input type="date" class="form-control" id="tgl_pinjam" rows="3" name="tgl_pinjam">{{ old('tgl_pinjam') ?? $pinjam->tgl_pinjam}}</input>
          </div>

          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" name="status" id="status">
              <option value="Pinjam" {{ (old('status') ?? $pinjam->status)==
            'Pinjam' ? 'selected': '' }}>
                Pinjam
              </option>
              <option value="Kembali" {{ (old('status') ?? $pinjam->status)==
            'Kembali' ? 'selected': '' }}>
                Kembali
              </option>
              <option value="Terlambat" {{ (old('status') ?? $pinjam->status)==
            'Terlambat' ? 'selected': '' }}>
                Terlambat
              </option>
              <option value="Hilang" {{ (old('status') ?? $pinjam->status)==
            'Hilang' ? 'selected': '' }}>
                Hilang
              </option>
            </select>
            @error('status')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary mb-2">Update</button>
          <br>
          <a href="{{ route('pinjams.index')}}" class="btn btn-warning">Kembali</a>

        </form>

      </div>
    </div>
  </div>

</body>

</html>