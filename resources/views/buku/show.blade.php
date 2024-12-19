<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Biodata {{$buku->nama}}</title>
</head>

<body>

    <div class="container pt-4 mt-5">
        <div class="row">
            <div class="col-12">

                <div class="pt-3 d-flex justify-content-end align-items-center">
                    <h1 class="h2 mr-auto">Biodata {{$buku->nama}}</h1>
                    <a href="{{ route('bukus.edit',['buku' => $buku->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('bukus.index')}}" class="btn btn-warning ml-3">Kembali</a>
                    <form action="{{ route('bukus.destroy',['buku' => $buku->id]) }}" method="POST">
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
                    <li>ISBN: {{$buku->isbn}} </li>
                    <li>Judul: {{$buku->judul}} </li>
                    <li>Penulis: {{$buku->penulis}} </li>
                    <li>Penerbit: {{$buku->penerbit}} </li>
                    <li>Tahun: {{$buku->tahun}} </li>
                </ul>

            </div>
        </div>
    </div>

</body>

</html>