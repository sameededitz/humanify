<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Server;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create one admin user
        User::factory()->admin()->create();

        // Create one regular user
        User::factory()->user()->create();

        // Plan::factory(1)->create();

        // $server = Server::factory(2)->create();
        // $server->addMedia(fake()->image(null,60))
        //         ->toMediaCollection('server_logo');
    }
}
