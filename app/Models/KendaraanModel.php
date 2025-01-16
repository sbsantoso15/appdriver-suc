<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanModel extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';

    protected $fillable = [
        'noplat', 
        'nik', 
        'masasewa1', 
        'masasewa2', 
        'tglpajak', 
        'idvendor',
        'uid', 
        'isonsite', 
        'isactive', 
        'updated_by'
    ];

    public static function countUnit() {
        return self::where('isactive', 1)->count('noplat');
    }

    public static function onsiteUnit() {
        return self::where('isactive', 1)
            ->where('isonsite', 1)
            ->count('noplat');
    }

    public static function offsiteUnit() {
        return self::where('isactive', 1)
            ->where('isonsite', 0)
            ->count('noplat');
    }

}
