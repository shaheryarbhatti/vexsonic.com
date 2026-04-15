<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoBooking extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'scheduled_at',
        'timezone',
    ];

    protected function casts(): array
    {
        return [
            'scheduled_at' => 'datetime',
        ];
    }
}
