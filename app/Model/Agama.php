<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    protected $table = 'ref_agama';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_agama'
    ];
}
