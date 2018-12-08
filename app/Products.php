<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    public function items()
    {

        return $this->hasMany(Items::class);
    }
}
