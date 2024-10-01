<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Position::factory()
            ->count(30)
            ->create()
            ->each(function ($position) {
                // Attach 3 random tags to each position
                $tags = Tag::inRandomOrder()->take(3)->pluck('id');
                $position->tags()->attach($tags);
            });
    }
}
