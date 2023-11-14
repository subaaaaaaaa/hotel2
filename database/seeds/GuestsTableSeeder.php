<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name'=>'奈良県民1号',
            'address'=>'奈良県奈良市',
            'tel'=>'010-0101-0101'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name'=>'大阪府民1号',
            'address'=>'大阪府大阪市',
            'tel'=>'020-0202-0202'
        ];
        DB::table('guests')->insert($param);

        $param = [
            'name'=>'京都府民1号',
            'address'=>'京都府京都市',
            'tel'=>'030-0303-0303'
        ];
        DB::table('guests')->insert($param);
    }
}
