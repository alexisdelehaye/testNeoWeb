<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HorairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horaires')->insert([
            "Jour" => "lundi",
            "Crénaux" => "18:30 - 20:00",
            "restaurants_id" => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('horaires')->insert([
            "Jour" => "mardi",
            "Crénaux" => "12:00 - 14:00 , 18:30 - 20:00",
            "restaurants_id" => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('horaires')->insert([
            "Jour" => "mercredi",
            "Crénaux" => "12:00 - 14:00 , 18:30 - 20:00",
            "restaurants_id" => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('horaires')->insert([
            "Jour" => "jeudi",
            "Crénaux" => "12:00 - 14:00 , 18:30 - 20:00",
            "restaurants_id" => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
