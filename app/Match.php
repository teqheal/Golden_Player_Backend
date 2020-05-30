<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'matches';
    protected $primaryKey = 'id';

    protected $fillable = [
        'home_team_id',
        'away_team_id',
        'start_datetime',
        'end_datetime',
        'win_team_id',
        'golden_game_id',
        'is_active',
        'created_at',
        'updated_at'
    ];

    public function homeTeam()
    {
        return $this->belongsTo('App\Team', 'home_team_id', 'id');
    }

    public function awayTeam()
    {
        return $this->belongsTo('App\Team', 'away_team_id', 'id');
    }
}
