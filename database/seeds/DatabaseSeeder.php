<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(UsersTableSeeder::class);
         $this->call(BeaconsTableSeeder::class);
         $this->call(DivisionsTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
         $this->call(DepartmentsTableSeeder::class);
    }
}