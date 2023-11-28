<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_type_id'=>11,
            'room_number'=>1011
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_type_id'=>12,
            'room_number'=>1012
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_type_id'=>13,
            'room_number'=>1013
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_type_id'=>21,
            'room_number'=>1021
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_type_id'=>22,
            'room_number'=>1022
        ];
        DB::table('rooms')->insert($param);

        $param = [
            'room_type_id'=>23,
            'room_number'=>1023
        ];
        DB::table('rooms')->insert($param);
    }
}
