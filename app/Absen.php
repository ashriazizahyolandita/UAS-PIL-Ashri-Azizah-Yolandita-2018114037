<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absen';
    protected $fillable = ['waktu_absen', 'mahasiswa_id','matakuliah_id','keterangan'];
}
