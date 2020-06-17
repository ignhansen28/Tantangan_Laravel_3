<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['perusahaan_id', 'nama', 'email', 'no_hp'];
}
