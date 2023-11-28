<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'number_of_adults'=>1,
            'number_of_children'=>0,
            'checkIn_date'=>'2023-11-20',
            'checkOut_date'=>'2023-11-22',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'number_of_adults'=>2,
            'number_of_children'=>1,
            'checkIn_date'=>'2023-11-25',
            'checkOut_date'=>'2023-11-26',
        ];
        DB::table('reservations')->insert($param);

        $param = [
            'number_of_adults'=>4,
            'number_of_children'=>0,
            'checkIn_date'=>'2023-11-16',
            'checkOut_date'=>'2023-11-20',
        ];
        DB::table('reservations')->insert($param);
    }
}
