@extends('layouts.mainlayout')

@section('title','class')


@section('content')
halo ini halaman data siswa
<table class="table">
    <tr >
        <th>no</th>
        <th>nama siswa</th>

      

    </tr>
    @foreach ( $kelas as $data )
   <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$data->name}}</td>


   </tr>


    @endforeach
</table>
@endsection
