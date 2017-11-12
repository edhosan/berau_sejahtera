<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PendidikanDitempuh extends Model
{
    protected $table = 'ref_pendidikan_ditempuh';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nm_pendidikan_ditempuh'
    ];
}
