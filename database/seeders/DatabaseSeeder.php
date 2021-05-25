<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Category;
use App\Models\Idea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-400']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple-400 text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow-400 text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green-400 text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red-400 text-white']);

        Idea::factory(30)->create();
    }
}
