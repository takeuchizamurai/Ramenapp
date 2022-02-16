<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'restaurant_id' => 1,
            'name' => 'いつきやらーめん',
            'price' => 700,
            'soup' => '豚骨',
            'noodles' => '細麵/太麺',
        ];
        DB::table('menus')->insert($param);

        $param = [
            'restaurant_id' => 2,
            'name' => '塩らぁめん',
            'price' => 780,
            'soup' => '塩',
            'noodles' => '細麵',
        ];
        DB::table('menus')->insert($param);

        $param = [
            'restaurant_id' => 2,
            'name' => '醤油らぁめん',
            'price' => 780,
            'soup' => '醤油',
            'noodles' => '細麵',
        ];
        DB::table('menus')->insert($param);


    }
}
