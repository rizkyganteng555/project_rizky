<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis', 'bio'];
    public $visible = ['nama_penulis', 'bio'];
    // membuat relasi one to many ke modl buku

    public function buku(){
        // data model penulis bisa dimiliki banyak data
        // dari model buku melalui fk 'id_penulis'
        return $this->hasMany(Buku::class, 'id_penulis');
    }
}
