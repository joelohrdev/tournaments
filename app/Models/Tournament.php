<?php

namespace App\Models;

use App\Enum\State;
use App\Observers\TournamentObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy(TournamentObserver::class)]
class Tournament extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'start_date',
        'end_date',
        'address',
        'city',
        'state',
        'zip',
        'draft',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'start_date' => 'date',
            'end_date' => 'date',
            'address' => 'string',
            'city' => 'string',
            'state' => State::class,
            'zip' => 'string',
            'draft' => 'boolean',
            'notes' => 'string',
        ];
    }
}
