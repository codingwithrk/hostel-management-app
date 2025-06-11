<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_name',
        'capacity',
        'available_rooms'
    ];

    protected function casts(): array
    {
        return [
            'capacity' => 'integer',
        ];
    }
}
