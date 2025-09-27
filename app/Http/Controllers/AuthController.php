<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email|',
            'password'=> 'required|string|min:6'
        ]); 
        $hasil = Auth::attempt($credentials);
        $admin = Auth::user();
       
        // if(!Gate::allows('admin-only')){
        //     return view('siswa.index',compact('siswas'));
        // }
        if ($hasil) {
            $request->session()->regenerate();
            return redirect()->route('siswa.index');
        }
        
        // untuk kirim validation exception
        throw ValidationException::withMessages([
            'email' => 'email or password is incorrect'
        ]);
    }
    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users|',
            'password'=> 'required|string|min:6|confirmed'
        ]);
        $User = User::create($validate);
        // untuk autentikasi
        Auth::login($User);
        
        return redirect(route('siswa.index'));
    }
    public function ShowRegister(){
        return view('auth.register');
    }
    public function ShowLogin(){
        return view('auth.login');
    }
     public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }

}
