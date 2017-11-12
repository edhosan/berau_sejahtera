<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cacat extends Model
{
    protected $table = 'ref_cacat';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_cacat'
    ];
}
