<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employees')->insert([
          ['family_name' => '田中', 'given_name' => '太郎','family_name_kana' => 'たなか', 'given_name_kana' => 'たろう', 'beacon_id' => '1', 'division_id' => '1', 'position' => '1', 'birthday' => '1997/3/3', 'hire_date' => '2018/10/11', 'positioned_at' => now(), 'created_at' => now(), 'updated_at' => now()],
          ['family_name' => '高橋', 'given_name' => '二郎','family_name_kana' => 'たかはし', 'given_name_kana' => 'じろう', 'beacon_id' => '2', 'division_id' => '2', 'position' => '2', 'birthday' => '1997/3/4', 'hire_date' => '2018/10/12', 'positioned_at' => now(), 'created_at' => now(), 'updated_at' =>now()],
          ['family_name' => '鈴木', 'given_name' => '三郎','family_name_kana' => 'すずき', 'given_name_kana' => 'さぶろう', 'beacon_id' => '3', 'division_id' => '3', 'position' => '3', 'birthday' => '1997/3/5', 'hire_date' => '2018/10/13', 'positioned_at' => now(), 'created_at' => now(), 'updated_at' => now()],
      ]);
    }
}
