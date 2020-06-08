<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    protected $table = 'celebrities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'birth_date',
        'meet_start',
        'meet_end',
        'images',
        'created_at',
        'updated_at'
    ];

    public function goldenGame()
    {
        return $this->hasMany('App\GoldenGame');
    }
}
