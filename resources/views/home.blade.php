<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

@section('title' ,'Data siswa')


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: pink  !important" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

<div class="container">
    <div class="mt-5">
        <h1>HALAMAN HOME</h1>
        <h3>Selamat Datang, {{$nama}}. role anda adalah {{$role}}</h3>

        @if ($role == 'admin')
                <a href="#">menuju halaman admin</a>

                @elseif ($role == 'petugas')

                @else
                role tidak tersedia
        @endif
        <br>

        @foreach ($data as $siswa)
            {{$siswa['nis']}},
            {{$siswa['nama_siswa']}},
            {{$siswa['jurusan']}},
            {{$siswa['tingkat']}},
            {{$siswa['ekskul']}} <br>
        @endforeach
        <table class="table">
            <thead>
              <tr>
                <th scope="col">nis</th>
                <th scope="col">nama</th>
                <th scope="col">jurusan</th>
                <th scope="col">tigkatan</th>
                <th scope="col">ekskul</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($data as $siswa)
                <tr>
                    <th scope="row">{{$siswa['nis']}}</th>
                    <td>{{$siswa['nama_siswa']}}</td>
                    <td>{{$siswa['jurusan']}}</td>
                    <td>{{$siswa['tingkat']}}</td>
                    <td>{{$siswa['ekskul']}}</td>
                  </tr>

                @endforeach

            </tbody>
          </table>
    </div>
</div>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>


</html>
