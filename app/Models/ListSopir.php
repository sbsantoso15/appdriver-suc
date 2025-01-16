<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListSopir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'name',
        'notelpon',
        'alamat',
        'tglpkwt',
        'updated_by'
    ];
}
