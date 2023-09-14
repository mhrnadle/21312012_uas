<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    use HasFactory;
    protected $table = '21312012_mahasiswa';

    protected $fillable = ['npm', 'nama', 'alamat'];
}
