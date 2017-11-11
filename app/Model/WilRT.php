<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WilRT extends Model
{
    protected $table = 'wil_rt';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'wil_kecamatan_id', 'wil_kampung_id', 'wil_rw_id', 'rt'
    ];

    public function rw()
    {
    	return $this->belongsTo('App\Model\WilRw');
    }
}
