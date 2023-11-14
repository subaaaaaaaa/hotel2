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
            'id'=>11,
            'name'=>'和室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'id'=>12,
            'name'=>'和室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'id'=>13,
            'name'=>'和室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'id'=>21,
            'name'=>'洋室',
            'capacity'=>1
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'id'=>22,
            'name'=>'洋室',
            'capacity'=>2
        ];
        DB::table('room_types')->insert($param);

        $param = [
            'id'=>23,
            'name'=>'洋室',
            'capacity'=>3
        ];
        DB::table('room_types')->insert($param);
    }
}
