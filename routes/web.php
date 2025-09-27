<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\siswacontroller;
use App\Models\siswa;
use Illuminate\Support\Facades\Route;

// protected route dengan middle ware auth
// Route::middleware('auth')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
    
//     Route::get('/about',function(){
//         return view('about');
//     })->name('about');
    
    
//     Route::get('/siswa',[siswacontroller::class,'index'])->name('siswa.index');
    
//     Route::post('/siswa',[siswacontroller::class,'store'])->name('siswa.store');
    
//     Route::get('/siswa/create',[siswacontroller::class,'create'])->name('siswa.create');

//     // metode kirim data ke view
//     Route::get('/contact',function(){
//         $nama = 'Delvin';
//         $umur = 18;
//         // metode kirim data ke contact pake assoc
//         return view('contact.contact' , ['nama' => $nama, 'umur' => $umur]);
    
//         // metode compact
//         // return view('contact.contact',compact('nama','umur'));
    
//         // methode with
//         // return view('contact.contact') -> with('nama',$nama)-> with('umur',$umur);
    
        
//     })->name('contact');
//     Route::delete('/siswa/{siswa}',[siswacontroller::class,'destroy'])->name('siswa.destroy');
// });

Route::middleware('auth')->controller(siswacontroller::class,)->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/about',function(){
        return view('about');
    })->name('about');
    
    
    Route::get('/siswa','index')->name('siswa.index');
    
    Route::post('/siswa','store')->name('siswa.store');
    
    Route::get('/siswa/create','create')->name('siswa.create');

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
    Route::delete('/siswa/{siswa}','destroy')->name('siswa.destroy');

    Route::get('/siswa/edit/{siswa}','edit')->name('siswa.edit');
    
    Route::put('/siswa/{id}','update')->name('siswa.update');
});
Route::post('/auth/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(Function(){
    Route::get('/auth/login','ShowLogin')->name('auth.login');

    Route::post('/auth/login','login')->name('login');
    Route::get('/auth/register','ShowRegister')->name('auth.register');

    Route::post('/auth/register','register')->name('register');
    
});


// Route wildcard harus paling bawah agar /siswa/{ini} yang ini ga kemakan sama {id}
Route::get('/siswa/{siswa}',[siswacontroller::class,'show'])->name('siswa.show');



