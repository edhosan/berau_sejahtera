<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WilRw extends Model
{
    protected $table = 'wil_rw';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'rw'
    ];

    public function kampung()
    {
    	return $this->belongsTo('App\Model\WilKampung');
    }
}
