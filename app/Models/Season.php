<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $table = 'season';
    protected $fillable = ['year'];

    public function drivers()
    {
        return $this->belongsToMany(Driver::class, 'driver_season_team')->withPivot('driver_id')->as('season_driver');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'driver_season_team')->withPivot('team_id')->as('season_team');
    }
}
