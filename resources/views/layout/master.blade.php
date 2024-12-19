<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title','Sistem Informasi Mahasiswa')</title>
    <style>
        .menubar {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link @yield('menuMahasiswa')" href="{{route('mahasiswas.index')}}">Data
                    Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('menubuku')" href="{{route('bukus.index')}}">Data Buku</a>
            </li>
            <li class=" nav-item">
                <a class="nav-link @yield('menupinjam')" href="{{route('pinjams.index')}}">Data Peminjaman</a>
            </li>
            <li class=" nav-item">
                <a class="nav-link @yield('menukembali')" href="{{route('kembalis.index')}}">Data Pengembalian</a>
            </li>
        
            <li>
                <form action="/logout" method="post>
                @csrf
                    <button type="submit" class="dropdown-item" <i class ="bi bi-box-arrow-right"></i>Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <div class="menubar mt-5 my-5">
        <img src="img/Anz_rama.png" alt="" width=80px height=80px; style=float:left;>
        <h1><b>UTS : Perpustakaan Sederhana</b></h1>
        <h3 style="float: left;">Selamat Datang, Rizqi Anzal Ramadhan | SI503 | Pemrograman Berbasis Web </h3>
        <img src="img/3x4.jpg" alt="" width=80px height=80px; style="margin-top: -20px; margin-left:10px; border-radius:50px;">
    </div>


    @yield('content')

    <footer class="bg-dark py-3 text-white mt-3">
        <div class="container pt-auto py-auto text-center">
            Sistem Informasi | Rizqi Anzal | Copyright © {{ date("Y") }}
        </div>
    </footer>

</body>

</html>