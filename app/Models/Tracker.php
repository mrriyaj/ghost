<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'user_id',
        'ip_address',
        'location',
        'browser_fingerprint',
        'device_type',
        'operating_system',
        'network_ip_address',
        'network_location',
        'network_type',
        'isp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
