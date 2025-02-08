<?php

namespace App\Observers;

use App\Models\Tournament;
use Illuminate\Support\Str;

class TournamentObserver
{
    public function creating(Tournament $tournament): void
    {
        $tournament->uuid = Str::uuid();
    }
}
