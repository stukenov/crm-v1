<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Added missing import for DB facade
use Carbon\Carbon; // Added missing import for Carbon

class NodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nodes')->insert([
            [
                'xfields' => 'author_bio|Джордж Оруэлл||related_link|http://example.com/orwell',
                'created_at' => Carbon::now(), // Changed now() to Carbon::now()
                'updated_at' => Carbon::now(), // Changed now() to Carbon::now()
            ],
            [
                'xfields' => 'author_bio|Александр Пушкин||related_link|http://example.com/pushkin',
                'created_at' => Carbon::now(), // Changed now() to Carbon::now()
                'updated_at' => Carbon::now(), // Changed now() to Carbon::now()
            ],
            [
                'xfields' => 'author_bio|Марк Твен||related_link|http://example.com/twain',
                'created_at' => Carbon::now(), // Changed now() to Carbon::now()
                'updated_at' => Carbon::now(), // Changed now() to Carbon::now()
            ],
        ]);
    }
}
