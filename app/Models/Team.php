<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    protected $fillable = [
        'tournament_id',
        'division_id',
        'logo',
        'name',
        'address',
        'city',
        'state',
        'zip_code',
        'coach_name',
        'coach_email',
        'coach_phone',
        'logo',
    ];

    public function tournament(): BelongsTo
    {
        return $this->belongsTo(Tournament::class);
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
