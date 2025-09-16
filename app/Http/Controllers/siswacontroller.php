<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\siswa;
use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // kalo mau pagination get nya diganti dengan paginate
    $data =siswa::orderBy('nama','asc')->paginate(10);
    return view('siswa.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mentor = Mentor::all();
        return view('siswa.create',['mentors' => $mentor]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => ['required','string','min:3'],
            'tanggal_lahir' => ['required','date'],
            'nilai' => ['required','int','min:1'],
            'npm' => ['required','int','min:4'],
            'mentor_id' => ['required','exists:mentors,id']
        ]);

        siswa::create([
            'nama' => $validasi['nama'],
            'tanggal_lahir' => $validasi['tanggal_lahir'],
            'nilai' => $validasi['nilai'],
            'npm' => $validasi['npm'],
            'mentor_id' => $validasi['mentor_id']
        ]);

        return redirect()->route('siswa.index')->with('success','data berhasil dibuat');
    }

    /** 
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
    // dd($id);
    // $siswa = siswa::with('mentor')->findOrFail($id);
    $siswa->load('mentor');
    return view('siswa.show',['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // route model binding 
    public function destroy(siswa $siswa)
    {   //jadi ga perlu query lagi (findorfail) dengan route model  binding
        // $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success','data berhasil dihapus');
    }
}
