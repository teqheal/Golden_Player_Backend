<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerBet extends Model
{
    protected $table = 'player_bets';
    protected $primaryKey = 'id';

    protected $fillable = [
        'player_id',
        'match_id',
        'bets_for',
        'is_used_joker',
        'created_at',
        'updated_at'
    ];
}
