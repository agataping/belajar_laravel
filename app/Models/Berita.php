<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    // protected $primaryKey = 'id'; //dibuat (perlu) jika primarykey bukan id
    protected $fillable = ['isi','judul'];
}

