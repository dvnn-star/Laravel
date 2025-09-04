<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});


Route::get('/siswa',function(){
    $data =[
        ['nama' => 'Delvin','tanggal-lahir' => '09-10-1999', 'nilai' => 90 , 'id' => '1031'],
        ['nama' => 'Jamal','tanggal-lahir' => '15-9-2004', 'nilai' => 80 , 'id' => '1030'],
        ['nama' => 'joy','tanggal-lahir' => '5-10-1998', 'nilai' => 30 , 'id' => '1032'],
        ['nama' => 'bf','tanggal-lahir' => '1-9-2003', 'nilai' => 100 , 'id' => '1033']
    ];
 
   return view('siswa.index',['data' => $data]);
});

// Route wildcard 
Route::get('/siswa/{id}',function($id){
    // dd($id);
    return view('siswa.show',['id' => $id]);
});



// metode kirim data ke view
Route::get('/contact',function(){
    $nama = 'Delvin';
    $umur = 18;
    // metode kirim data ke contact pake assoc
    return view('contact.contact' , ['nama' => $nama, 'umur' => $umur]);

    // metode compact
    // return view('contact.contact',compact('nama','umur'));

    // methode with
    // return view('contact.contact') -> with('nama',$nama)-> with('umur',$umur);

    
});