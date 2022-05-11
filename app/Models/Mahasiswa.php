<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $table = "mahasiswa";

}
