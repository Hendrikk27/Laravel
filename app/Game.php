<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function Type()
    {
        return $this -> belongsTo(Type::class);
    }
}
