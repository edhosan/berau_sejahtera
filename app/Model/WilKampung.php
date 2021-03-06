<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WilKampung extends Model
{
    protected $table = 'wil_kampung';

    protected $primaryKey = 'id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id', 'nm_kampung'
    ];

    public function kecamatan()
    {
    	return $this->belongsTo('App\Model\WilKecamatan');
    }

    public function rw()
    {
        return $this->hasMany('App\Model\WilRw');
    }

    public function rt()
    {
        return $this->hasManyThrough('App\Model\WilRT', 'App\Model\Rw');
    }
}
