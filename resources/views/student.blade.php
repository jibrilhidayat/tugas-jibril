@extends('layouts.mainlayout')

@section('title','student')


@section('content')
halo ini halaman data siswa
<table class="table">
    <tr >
        <th>no</th>
        <th>nama siswa</th>
        <th>gender</th>
        <th>nis</th>
        <th>kelas</th>
    </tr>
    @foreach ( $siswa as $data )
   <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$data->nama_siswa}}</td>
    <td>{{$data->gender}}</td>
    <td>{{$data->nisn}}</td>
    <td>{{$data->class_id}}</td>

   </tr>


    @endforeach
</table>
@endsection
