<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Dole',
            'password' => 'john@gmail.com'

        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);


        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel , php',
        //     'company' => 'imyanmarhouse',
        //     'location' => '11 floor , MAC tower , merchant road , near sulapagoda',
        //     'email' => 'imyanmarhouse@gmail.com',
        //     'website' => 'www.imyanmarhouse.com',
        //     'description' => 'imyanmar house is good'
        // ]);

        // Listing::create([
        //     'title' => 'Java Senior Developer',
        //     'tags' => 'java',
        //     'company' => 'imyanmarhouse',
        //     'location' => '11 floor , MAC tower , merchant road , near sulapagoda',
        //     'email' => 'imyanmarhouse@gmail.com',
        //     'website' => 'www.imyanmarhouse.com',
        //     'description' => 'imyanmar house is good'
        // ]);
    }
}
