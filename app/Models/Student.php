<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // fillable = data yang boleh di isi, guarded = data yang tidak boleh di isi
    protected $fillable = [
        'nama', 'nim', 'email', 'jurusan'
    ];
}
