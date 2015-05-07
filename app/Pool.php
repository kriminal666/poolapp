<?php namespace Poolapp;

use Illuminate\Database\Eloquent\Model;

class Pool extends Model {

    protected $fillable = ['title'];

    public function poolOptions()
    {
        return $this->hasMany('Poolapp\PoolOptions');
    }

}
