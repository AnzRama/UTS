<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Pinjam {{$pinjam->nama_peminjam}}</title>
</head>

<body>

    <div class="container pt-4 mt-5">
        <div class="row">
            <div class="col-12">

                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Biodata {{$pinjam->nama_peminjam}}</h1>
                    <a href="{{ route('pinjams.edit',['pinjam' => $pinjam->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('pinjams.index')}}" class="btn btn-warning ml-3">Kembali</a>
                    <form action="{{ route('pinjams.destroy',['pinjam' => $pinjam->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                    </form>

                </div>

                <hr>

                @if(session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan')}}
                </div>
                @endif

                <ul>
                    <li>Judul: {{$pinjam->judul_buku}} </li>
                    <li>Peminjam: {{$pinjam->nama_peminjam}} </li>
                    <li>Tanggal: {{$pinjam->tgl_pinjam}} </li>
                    <li>Status: {{$pinjam->status}} </li>
                </ul>

            </div>
        </div>
    </div>

</body>

</html>