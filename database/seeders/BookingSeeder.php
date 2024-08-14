<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('bookings')->truncate();
        \Illuminate\Support\Facades\DB::table('bookings')->insert([
            [
                'customer_id' => '1',
                'room_id' => '1',
                'checkin_date' => '2024-08-01',
                'checkout_date' => '2024-08-03',
                'total_adults' => '2',
                'total_children' => '2',
                'ref' => 'admin',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '2',
                'room_id' => '2',
                'checkin_date' => '2024-08-04',
                'checkout_date' => '2024-08-08',
                'total_adults' => '2',
                'total_children' => '0',
                'ref' => 'admin',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '3',
                'room_id' => '3',
                'checkin_date' => '2024-08-09',
                'checkout_date' => '2024-08-12',
                'total_adults' => '2',
                'total_children' => '1',
                'ref' => 'front',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '4',
                'room_id' => '4',
                'checkin_date' => '2024-08-13',
                'checkout_date' => '2024-08-16',
                'total_adults' => '1',
                'total_children' => '2',
                'ref' => 'front',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '5',
                'room_id' => '6',
                'checkin_date' => '2024-08-17',
                'checkout_date' => '2024-08-20',
                'total_adults' => '3',
                'total_children' => '2',
                'ref' => 'admin',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '6',
                'room_id' => '7',
                'checkin_date' => '2024-08-21',
                'checkout_date' => '2024-08-24',
                'total_adults' => '4',
                'total_children' => '3',
                'ref' => 'front',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '7',
                'room_id' => '2',
                'checkin_date' => '2024-08-25',
                'checkout_date' => '2024-08-28',
                'total_adults' => '2',
                'total_children' => '3',
                'ref' => 'front',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '8',
                'room_id' => '4',
                'checkin_date' => '2024-08-28',
                'checkout_date' => '2024-08-31',
                'total_adults' => '2',
                'total_children' => '0',
                'ref' => 'admin',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '9',
                'room_id' => '1',
                'checkin_date' => '2024-09-01',
                'checkout_date' => '2024-09-03',
                'total_adults' => '2',
                'total_children' => '2',
                'ref' => 'admin',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'customer_id' => '10',
                'room_id' => '7',
                'checkin_date' => '2024-09-04',
                'checkout_date' => '2024-09-08',
                'total_adults' => '1',
                'total_children' => '2',
                'ref' => 'front',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
