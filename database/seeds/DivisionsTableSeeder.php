<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('divisions')->insert([
          ['division_name' => '総務部', 'department_id' => '1' ],
          ['division_name' => 'IoT事業部', 'department_id' => '2' ],
          ['division_name' => '人事部', 'department_id' => '3' ],
      ]);
    }
}
