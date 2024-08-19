<?php

use App\Http\Controllers\ClassroomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get ( '/nama', function (){
    return 'NAMA SAYA JIRBIL';
});

Route::get ( '/tambah', function (){
    return 3 + 4;
});

Route::get ( '/kurang', function (){
    return 10 - 2;
});

Route::get ( '/kali', function (){
    return 3 * 6;
});

Route::get ( '/bagi', function (){
    return 5 / 5;
});

Route::get('/student' , [StudentController::class,  'index']);
Route::get('/class' , [ClassroomController::class,  'kelas']);



Route::get('/contact', function () {
    return view('contact',[
        'nama_siswa' => 'jibril',
        'kelas' => '12 RPL C',
        'alamat' => 'margaasih',
        'tpln' => '0862675'
    ]);
});

Route::get('product/{id}', function ($id) {
    return view('product.detail',[
        'id' => $id
    ]);
});

Route::get('product/{id}', function ($id) {
 $data=[
    [
        'id' => 1,
        'nama_product' => 'Apple 15 pro',
        'harga' => 2000000,
        'stock' => 10,
    ],

    [
        'id' => 2,
        'nama_product' => 'Apple 14 pro',
        'harga' => 2000000,
        'stock' => 10,
    ],


    [
        'id' => 3,
        'nama_product' => 'Apple 13 pro',
        'harga' => 2000000,
        'stock' => 40,
    ]
    ];

    $cari_produk = collect($data)->where('id', $id)->first();
    return view('product.detail',[
        'data' => $cari_produk
    ]);

});

//siswa



Route::get('siswa/{nis}', function ($nis) {
    $siswa=[
       [
           'nis' => 10211,
           'nama_siswa' => 'rendi',
           'jurusan' => 'rpl',
           'tingkat' => 10,
           'ekskul' => 'bola voli'
       ],

       [
        'nis' => 1321,
        'nama_siswa' => 'arya',
        'jurusan' => 'tp',
        'tingkat' => 11,
        'ekskul' => 'batminton'
       ],


       [
        'nis' => 23463,
        'nama_siswa' => 'sandi',
        'jurusan' => 'tkj',
        'tingkat' => 10,
        'ekskul' => 'futsal'
       ]
       ];

       $cari = collect($siswa)->where('nis', $nis)->first();
       return view('product.detail',[
           'data' => $cari
       ]);






   });

   Route::get('/home', function () {
    $siswa=[
       [
           'nis' => 10211,
           'nama_siswa' => 'rendi',
           'jurusan' => 'rpl',
           'tingkat' => 10,
           'ekskul' => 'bola voli'
       ],

       [
        'nis' => 1321,
        'nama_siswa' => 'arya',
        'jurusan' => 'tp',
        'tingkat' => 11,
        'ekskul' => 'batminton'
       ],


       [
        'nis' => 23463,
        'nama_siswa' => 'sandi',
        'jurusan' => 'tkj',
        'tingkat' => 10,
        'ekskul' => 'futsal'
       ]
       ];


       return view('/home',[
            'nama'=> 'jibril',
            'role' => 'admin',
           'data' => $siswa
       ]);

    });

















