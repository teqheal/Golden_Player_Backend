<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'alias_name',
        'logo',
        'created_at',
        'updated_at'
    ];

    public function homeMatches()
    {
        return $this->hasMany('App\Match', 'id', 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany('App\Match', 'id', 'away_team_id');
    }
}
