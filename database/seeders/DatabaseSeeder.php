<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use App\Models\Vote;
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
        User::factory()->create([
            'name'=> 'kevin',
            'email'=>'kvnwanyama@gmail.com',
        ]);
        
        User::factory(19)->create();
       
        Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);
        Category::factory()->create(['name' => 'Category 3']);
        Category::factory()->create(['name' => 'Category 4']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-400']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple-400 text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow-400 text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green-400 text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red-400 text-white']);

        Idea::factory(100)->create();

        // Generate unique votes. Ensure idea_id and user_id are unique for each row
        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }
    }
}
