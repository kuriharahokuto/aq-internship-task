<?php

use Illuminate\Database\Seeder;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('beacons')->insert([
          ['major' => '3333','minor' => '1', 'position' => 'カフェアイパッド' ],
          ['major' => '3333','minor' => '2', 'position' => 'カフェダーツ' ],
          ['major' => '3333','minor' => '3', 'position' => 'エントランス' ],
      ]);
    }
}
