<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{

    protected $table = 'transactiondetail';

   

    public function transactionHeader(){
        return $this->belongsTo(TransactionHeader::class);
    }

    public function game()
    {
        return $this->hasOne(Game::class, 'id', 'game_id');
    }
}
