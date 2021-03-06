<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    //
    protected $table = 'ward';

    protected $primaryKey = 'room';

    public $incrementing = false;

    protected function admits()
    {
        return $this->hasMany(Admit::class, 'room', 'room');
    }
}
