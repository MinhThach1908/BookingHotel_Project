<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('room_types')->truncate();
        \Illuminate\Support\Facades\DB::table('room_types')->insert([
                [ 'title'=> 'Standard Single Room', 'detail'=> 'A cozy room with a single bed, ideal for solo travelers.', 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),'price'=> 75 ],
                [ "title"=> "Standard Double Room", "detail"=> "A room with a double bed, perfect for couples.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 85 ],
                [ "title"=> "Deluxe Double Room", "detail"=> "A spacious double room with additional amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 115 ],
                [ "title"=> "Superior Single Room", "detail"=> "An upgraded single room with extra comfort features.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 95 ],
                [ "title"=> "Superior Double Room", "detail"=> "A larger double room with premium furnishings.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title"=> "Executive Suite", "detail"=>"A luxurious suite with separate living area and enhanced amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 200 ],
                [ "title"=> "Family Room", "detail"=> "A room designed for families with multiple beds and space.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 150 ],
                [ "title"=> "Penthouse Suite", "detail"=> "A top-floor suite with stunning views and top-notch facilities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 350 ],
                [ "title"=> "Junior Suite", "detail"=> "A spacious suite with an open-plan living area.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 175 ],
                [ "title"=> "Business Room", "detail"=> "A room with business amenities like a desk and high-speed internet.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 120 ],
                [ "title"=> "Accessible Room", "detail"=> "A room designed for accessibility with special features.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=>100 ],
                [ "title"=> "Honeymoon Suite", "detail"=> "A romantic suite with special touches for honeymooners.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 225 ],
                [ "title"=> "Poolside Room", "detail"=> "A room with direct access to the pool area.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title"=> "Garden View Room", "detail"=> "A room with a view of the hotel garden.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 110 ],
                [ "title"=> "Ocean View Room", "detail"=> "A room with breathtaking views of the ocean.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 160 ],
                [ "title"=> "Mountain View Room", "detail"=>"A room offering views of the surrounding mountains.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title"=> "Luxury Suite", "detail"=> "An opulent suite with high-end furnishings and extra space.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 275 ],
                [ "title"=> "Romantic Suite", "detail"=> "A suite with a romantic ambiance, perfect for couples.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 190 ],
                [ "title"=> "Extended Stay Room", "detail"=> "A room with amenities suited for longer stays.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title"=> "Loft Room", "detail"=> "A stylish room with a loft area for added space.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 150 ],
                [ "title"=> "Studio Room", "detail"=> "A self-contained room with a kitchenette.",'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price"=> 125 ],
                [ "title"=> "Budget Room", "detail"=> "An economical room with basic amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 60 ],
                [ "title"=> "Standard Twin Room", "detail"=> "A room with two single beds, ideal for friends or colleagues.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 85 ],
                [ "title"=> "Luxury Double Room", "detail"=> "A high-end double room with deluxe features.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title"=> "Presidential Suite", "detail"=> "The most luxurious suite with multiple rooms and exceptional amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 500 ],
                [ "title"=> "City View Room", "detail"=> "A room offering a view of the city skyline.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 120 ],
                [ "title"=> "Heritage Room", "detail"=> "A room with a historic or traditional design.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 150 ],
                [ "title"=> "Spa Suite", "detail"=> "A suite with a private spa and relaxation area.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 250 ],
                [ "title"=> "Wellness Room", "detail"=> "A room equipped with wellness features like a yoga mat and healthy amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title"=> "Pet-Friendly Room", "detail"=> "A room where pets are welcome with special amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 120 ],
                [ "title"=> "Corporate Room", "detail"=> "A room with business-oriented features such as a meeting table and extra power outlets.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title"=>"Luxury King Room", "detail"=> "A premium room with a king-size bed and upscale amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 160 ],
                [ "title"=> "Modern Room", "detail"=> "A contemporary room with modern decor and amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title"=> "Classic Room", "detail"=> "A room with traditional furnishings and classic design.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 110 ],
                [ "title"=>"Art Suite", "detail"=> "A suite with artistic decor and creative touches.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 185 ],
                [ "title"=> "Countryside Room", "detail" => "A room with views of the countryside and rural charm.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 125 ],
                [ "title"=> "Skyline Suite", "detail"=>"A suite with panoramic views of the city skyline.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 275 ],
                [ "title"=> "Luxury Suite with Terrace", "detail"=> "A suite featuring a private terrace with exclusive views.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 300 ],
                [ "title"=> "Pool View Suite", "detail"=> "A suite with views of the hotel pool area.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 200 ],
                [ "title" => "Deluxe Studio", "detail"=> "A spacious studio with upscale furnishings and amenities.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title" => "Oceanfront Room", "detail"=> "A room directly facing the ocean with stunning views.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 180 ],
                [ "title" => "Garden Suite", "detail"=> "A suite with private garden access and outdoor space.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 220 ],
                [ "title" => "Safari Room", "detail"=> "A themed room inspired by safari adventures.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title" => "Ski Lodge Room", "detail"=> "A cozy room ideal for ski enthusiasts, with warm decor.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title" => "In-Room Dining Suite", "detail"=> "A suite designed for extensive in-room dining experiences.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 250 ],
                [ "title" => "Seaside Room", "detail"=> "A room with a close view of the seaside and ocean breezes.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 160 ],
                [ "title" => "Tropical Room", "detail"=> "A room with tropical decor and a relaxing atmosphere.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title" => "Mountain Lodge Room", "detail"=> "A room with rustic charm and mountain views.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 145 ],
                [ "title" => "Cosmic Room", "detail"=> "A room with a space-themed design and decor.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=>135 ],
                [ "title" => "Cottage Room", "detail"=> "A charming room styled like a cozy cottage.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 120 ],
                [ "title" => "Loft Suite", "detail"=> "A spacious suite with a modern loft area.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 185 ],
                [ "title" => "Deluxe King Room", "detail"=> "A king-sized room with deluxe amenities and features.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 150 ],
                [ "title" => "Scenic Room", "detail"=> "A room with beautiful views of the surrounding landscape.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 140 ],
                [ "title" => "Enchanted Room", "detail"=> "A room with whimsical and enchanting decor.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 130 ],
                [ "title" => "Ocean Breeze Suite", "detail"=> "A suite with ocean-inspired decor and a breezy atmosphere.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 200 ],
                [ "title" => "Rustic Suite", "detail"=> "A suite with a rustic and natural decor style.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(),"price"=> 175 ],
                [ "title" => "Glamour Suite", "detail"=> "A luxurious suite with glamorous and elegant features.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price"=> 225 ],,
                [ "title" => "Safari Suite", "detail"=> "A suite designed with safari adventure themes and decor.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price"=> 200 ],,
                [ "title" => "Zen Room" , "detail" => "A peaceful room designed for relaxation and mindfulness.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price" => 130 ],
                [ "title" => "Victorian Room", "detail" => "A room styled with Victorian-era decor and furnishings.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price" => 150 ],
                ["title" => "Art Deco Suite", "detail" => "A suite featuring Art Deco design elements and style.", 'created_at' => \Illuminate\Support\Carbon::now(), 'updated_at' => \Illuminate\Support\Carbon::now(), "price" => 180 ],
        ]);
    }
}
