<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seed the users first
        $this->call(UserSeeder::class);
        //get rid of any data that is there

        DB::table('job_listings')->truncate();



        $this->call(JobSeeder::class);
    }
}
