<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;
    const ZONES = [
        1 => 'Europe',
        2=>'Asia',
        3=>'Africa',
        4=>'America'
    ];
    protected $appends = ['zoneName'];

    public function getZoneNameAttribute()
    {
        return self::ZONES[$this->zone];
    }
    public function sources(): HasMany
    {
        return $this->hasMany('App\Models\Sources');
    }
}
