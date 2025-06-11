<?php

namespace App\Models;

use App\Enums\PeopleStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class People extends Model
{
    protected $fillable = [
        'person_name',
        'person_mobile_number',
        'address',
        'room_id',
        'room_price',
        'joining_date',
        'leaving_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => PeopleStatus::class,
        ];
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
