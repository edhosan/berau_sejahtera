<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WilKecamatan extends Model
{
    protected $table = 'wil_kecamatan';

    protected $primaryKey = ['id'];

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'nm_kecamatan'
    ];
    
}
