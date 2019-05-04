<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    protected $fillable = [
        'nama', 'prodi', 'nrp', 'kelas', 'ukuran_toga', 'alamat'
    ];
}
