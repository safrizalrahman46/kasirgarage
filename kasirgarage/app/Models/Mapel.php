<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "mapel";
    protected $fillable = ['nama_mapel','kode_mapel','guru_id'];

    public function siswa(){
        return $this->hasOne('App\Models\Siswa');
    }
    public function nilai(){
        return $this->hasToMany('App\Models\Nilai');
    }
    // public function mapel(){
    //     return $this->belongsTo('App\Models\Mapel');
    // }
    public function guru(){
        return $this->belongsTo(Guru::class,'guru_id');
    }

}
