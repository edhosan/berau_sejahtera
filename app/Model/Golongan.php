<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'ref_golongan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_golongan'
    ];
}
