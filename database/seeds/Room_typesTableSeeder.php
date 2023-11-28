<?php

use Illuminate\Database\Seeder;

class Room_typesTableSeeder extends Seeder
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
            'name'=>'和室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>12,
            'name'=>'和室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>13,
            'name'=>'和室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>21,
            'name'=>'洋室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>22,
            'name'=>'洋室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'room_type_id'=>23,
            'name'=>'洋室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);
    }
}
