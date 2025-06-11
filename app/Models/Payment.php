<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'person_id',
        'amount',
        'date_of_pay',
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class, 'person_id', 'id');
    }
}
