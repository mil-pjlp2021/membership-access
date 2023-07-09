<?php

namespace Database\Seeders;

use App\Models\Video;
use Database\Factories\VideoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::factory()->count(20)->create();
    }
}
