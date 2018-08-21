<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departments')->insert([
          [ 'department_name' => '開発'],
          [ 'department_name' => 'デザイン'],
          [ 'department_name' => 'マーケティング'],
      ]);
    }
}
