<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //siswa cari ke table siswas
    // user cari ke table users defaultnya ditambahin s


    protected $table = 'siswa';
    protected $fillable = ['nama','tanggal_lahir','nilai','npm'];

}
