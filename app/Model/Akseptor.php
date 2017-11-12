<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Akseptor extends Model
{
    protected $table = 'ref_kb';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_kb'
    ];
}
