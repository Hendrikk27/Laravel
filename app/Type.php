<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function Game()
    {
        return $this -> hasMany(Game::class);
    }
}
