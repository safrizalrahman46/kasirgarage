<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "guru";
    protected $fillable = ['nama','nip'];

    public function siswa(){
        return $this->hasMany('App\Models\Siswa');
    }
    public function mapel(){
        return $this->hasMany(Mapel::class,'guru_id');
    }
}
