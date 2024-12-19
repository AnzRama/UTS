<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <title>Edit Detail Buku</title>
</head>

<body>

  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Edit Detail Buku</h1>
        <hr>

        <form action="{{ route('bukus.update',['buku' => $buku->id]) }}" method="POST">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" name="isbn" value="{{ old('isbn') ?? $buku->isbn }}">
            @error('isbn')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') ?? $buku->judul }}">
            @error('judul')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="penulis">Penulis</label>
            <textarea class="form-control" id="penulis" rows="3" name="penulis">{{ old('penulis') ?? $buku->penulis}}</textarea>
          </div>

          <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <textarea class="form-control" id="penerbit" rows="3" name="penerbit">{{ old('penerbit') ?? $buku->penerbit}}</textarea>
          </div>

          <div class="form-group">
            <label for="tahun">Tahun</label>
            <textarea class="form-control" id="tahun" rows="3" name="tahun">{{ old('tahun') ?? $buku->tahun}}</textarea>
          </div>

          <button type="submit" class="btn btn-primary mb-2">Update</button>
          <br>
          <a href="{{ route('bukus.index')}}" class="btn btn-warning">Kembali</a>

        </form>

      </div>
    </div>
  </div>

</body>

</html>