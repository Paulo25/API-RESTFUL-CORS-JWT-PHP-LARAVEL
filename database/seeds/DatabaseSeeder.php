<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan make:seeder UsersTableSeeder
     * php artisan db:seed
     * php artisan db:seed --class=UsersTableSeeder
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
    }
}
