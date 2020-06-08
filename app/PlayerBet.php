<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PlayerBet extends Pivot
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

    public function match()
    {
        return $this->belongsTo('App\Match');
    }

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
