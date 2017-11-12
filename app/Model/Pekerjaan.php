<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'ref_pekerjaan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_pekerjaan'
    ];
}
