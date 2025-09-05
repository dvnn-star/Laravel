<?php

use App\Models\siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});


Route::get('/siswa',function(){
    $data =siswa::orderBy('nilai','asc')->get();
   return view('siswa.index',['data' => $data]);
});

// Route wildcard 
Route::get('/siswa/{id}',function($id){
    // dd($id);
    $siswa = siswa::findOrFail($id);
    return view('siswa.show',['siswa' => $siswa]);
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