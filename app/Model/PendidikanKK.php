<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PendidikanKK extends Model
{
    protected $table = 'ref_pendidikan_kk';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_pendidikan_kk'
    ];
}
