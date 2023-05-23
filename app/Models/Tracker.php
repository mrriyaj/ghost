<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_time',
        'user_id',
        'ip_address',
        'city',
        'country',
        'countryCode',
        'regionName',
        'zip',
        'lat',
        'lon',
        'timezone',
        'isp',
        'org',
        'as',
        'browser'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
