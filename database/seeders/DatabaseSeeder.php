<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employer;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users
        User::factory(10)->create();

        // Create employers
        Employer::factory(10)->create()->each(function ($employer) {
            // Create jobs for each employer
            Job::factory(30)->create([
                'employer_id' => $employer->id
            ]);
        });
    }
}
