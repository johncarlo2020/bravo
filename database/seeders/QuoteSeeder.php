<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::create([
            'name' => 'Be Kind Online',
        ]);

        Quote::create([
            'name' => 'Words matter, choose wisely',
        ]);

        Quote::create([
            'name' => 'Love is the best reply',
        ]);

        Quote::create([
            'name' => 'Think before you post',
        ]);

        Quote::create([
            'name' => 'Be the change online',
        ]);
    }
}
