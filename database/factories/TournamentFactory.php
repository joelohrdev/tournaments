<?php

namespace Database\Factories;

use App\Enum\State;
use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TournamentFactory extends Factory
{
    protected $model = Tournament::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->company(),
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->randomElement(State::class),
            'zip' => $this->faker->postcode(),
            'draft' => $this->faker->boolean(),
            'notes' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
