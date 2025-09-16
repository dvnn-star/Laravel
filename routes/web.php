<?php

use App\Http\Controllers\siswacontroller;
use App\Models\siswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/delvin/about',function(){
    return view('about');
})->name('about');


Route::get('/siswa',[siswacontroller::class,'index'])->name('siswa.index');

Route::post('/siswa',[siswacontroller::class,'store'])->name('siswa.store');

Route::get('/siswa/create',[siswacontroller::class,'create'])->name('siswa.create');


Route::delete('/siswa/{siswa}',[siswacontroller::class,'destroy'])->name('siswa.destroy');

// Route wildcard harus paling bawah agar /siswa/{ini} yang ini ga kemakan sama {id}
Route::get('/siswa/{siswa}',[siswacontroller::class,'show'])->name('siswa.show');



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

    
})->name('contact');
