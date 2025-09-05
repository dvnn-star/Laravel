<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    //siswa cari ke table siswas
    // user cari ke table users defaultnya ditambahin s

    protected $table = 'siswa';
    protected $fillable = ['nama','tanggal_lahir','nilai','npm'];

}
