<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'ref_status_kawin';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_status_kawin'
    ];
}
