<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = ['nama','jenkel','alamat','nohp','jurusan','email','guru_id'];

    public function guru(){
        return $this->belongsTo('App\Models\Guru');
    }

    public function mapel(){
        return $this->belongsTo('App\Models\Mapel');
    }
}
