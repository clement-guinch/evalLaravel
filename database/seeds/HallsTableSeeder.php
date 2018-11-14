<?php

use Illuminate\Database\Seeder;

class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('halls')->insert([
        [
          "name" => "Halle Tony Garnier",
          "positions_id" => 1,
          "statuses_id" => 1,
        ],
        [
          "name" => "Arenes de Nimes",
          "positions_id" => 2,
          "statuses_id" => 2,
        ],
        [
          "name" => "Zénith de Toulouse",
          "positions_id" => 3,
          "statuses_id" => 2,
        ],
      ]);
    }
}
