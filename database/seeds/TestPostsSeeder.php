<?php

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class TestPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = User::all();
        $originalDt = Carbon::now()->subWeek();

        $limit = 20;
        for ($i = 0; $i < $limit; $i++) {
            $postDt = $originalDt->copy()->subDays($i)->toDateTimeString();
            Post::create([
                'user_uid' => $users->random()->uid,
                'body'     => $faker->text,
                'created_at' => $postDt,
                'updated_at' => $postDt,
            ]);
        }
    }
}
