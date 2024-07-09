<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'acme@test.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores iusto consectetur eligendi similique omnis, culpa dignissimos excepturi, quasi, sapiente nobis hic voluptate? Veniam temporibus officiis, nemo ad voluptatum dolore blanditiis?',
        // ]);

        // Listing::create([
        //     'title' => 'Vuejs Junior Developer',
        //     'tags' => 'vuejs, javascript',
        //     'company' => 'Tripple Pan',
        //     'location' => 'Boston, MA',
        //     'email' => 'tripple@test.com',
        //     'website' => 'https://www.tripple.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores iusto consectetur eligendi similique omnis, culpa dignissimos excepturi, quasi, sapiente nobis hic voluptate? Veniam temporibus officiis, nemo ad voluptatum dolore blanditiis?',
        // ]);
    }
}
