<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(100)->create();
        \App\Models\Tickets::factory(100)->create();
        \App\Models\Departments::factory(10)->create();
        \App\Models\JobTitles::factory(100)->create();
        \App\Models\TicketCategory::factory(100)->create();
        \App\Models\TicketSeverities::factory(100)->create();
        \App\Models\TicketMessages::factory(100)->create();
    }
}
