<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '斉家',
            'address' => '御坊市湯川町７０-８',
            'TEL' => '0738-24-0071',
            'message' => '',
        ];
        DB::table('restaurants')->insert($param);

        $param = [
            'name' => 'たんぼ',
            'address' => '御坊市湯川町財部２１７-２',
            'TEL' => '0738-32-8333',
            'message' => '',
        ];
        DB::table('restaurants')->insert($param);
    }
}
