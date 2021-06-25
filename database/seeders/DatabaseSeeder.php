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
        // \App\Models\User::factory(10)->create();
        // \App\Models\category::factory(10)->create();

        $this->call([CategorySeeder::class]);
        $this->call([ProductSeeder::class]);
        $this->call([OptionSeeder::class]);
        $this->call([StaffSeeder::class]);
        $this->call([RewardSeeder::class]);
        $this->call([VoucherSeeder::class]);
    }
}
