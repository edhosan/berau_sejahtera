<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hubungan extends Model
{
    protected $table = 'ref_hubungan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_hubungan'
    ];
}
