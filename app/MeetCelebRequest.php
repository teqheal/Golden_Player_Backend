<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetCelebRequest extends Model
{
    protected $table = 'meet_celeb_requests';
    protected $primaryKey = 'id';

    protected $fillable = [
        'player_id',
        'celebrity_id',
        'payment_id',
        'created_at',
        'updated_at'
    ];
}
