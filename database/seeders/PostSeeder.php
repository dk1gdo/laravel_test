<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 0;

        do {
            $i++;
            $randDate = new \DateTime();
            $randDate->setTime(mt_rand(0, 23), mt_rand(0, 59));
            DB::table('Posts')->insert([
                'title' => Str::random(16),
                'description' => Str::random(16),
                'additional' => Str::random(16),
                'date' => $randDate->format('Y-m-d H:i:s')
            ]);
        } while ($i < 100);
        
    }
}
