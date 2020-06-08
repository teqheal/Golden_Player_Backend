<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoldenGame extends Model
{
    protected $table = 'golden_games';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'celebrity_id',
        'created_at',
        'updated_at'
    ];

    public function celebrity()
    {
        return $this->belongsTo('App\Celebrity');
    }

    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}
