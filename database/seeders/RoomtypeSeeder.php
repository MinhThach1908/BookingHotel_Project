<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomTypes = [
            ['title' => 'Standard Single Room', 'detail' => 'A cozy room with a single bed, ideal for solo travelers.', 'price' => 75],
            ['title' => 'Standard Double Room', 'detail' => 'A room with a double bed, perfect for couples.', 'price' => 85],
            ['title' => 'Deluxe Double Room', 'detail' => 'A spacious double room with additional amenities.', 'price' => 115],
            ['title' => 'Superior Single Room', 'detail' => 'An upgraded single room with extra comfort features.', 'price' => 95],
            ['title' => 'Superior Double Room', 'detail' => 'A larger double room with premium furnishings.', 'price' => 130],
            ['title' => 'Executive Suite', 'detail' => 'A luxurious suite with separate living area and enhanced amenities.', 'price' => 200],
            ['title' => 'Family Room', 'detail' => 'A room designed for families with multiple beds and space.', 'price' => 150],
            ['title' => 'Penthouse Suite', 'detail' => 'A top-floor suite with stunning views and top-notch facilities.', 'price' => 350],
            ['title' => 'Junior Suite', 'detail' => 'A spacious suite with an open-plan living area.', 'price' => 175],
            ['title' => 'Business Room', 'detail' => 'A room with business amenities like a desk and high-speed internet.', 'price' => 120],
            ['title' => 'Accessible Room', 'detail' => 'A room designed for accessibility with special features.', 'price' => 100],
            ['title' => 'Honeymoon Suite', 'detail' => 'A romantic suite with special touches for honeymooners.', 'price' => 225],
            ['title' => 'Poolside Room', 'detail' => 'A room with direct access to the pool area.', 'price' => 140],
            ['title' => 'Garden View Room', 'detail' => 'A room with a view of the hotel garden.', 'price' => 110],
            ['title' => 'Ocean View Room', 'detail' => 'A room with breathtaking views of the ocean.', 'price' => 160],
            ['title' => 'Mountain View Room', 'detail' => 'A room offering views of the surrounding mountains.', 'price' => 130],
            ['title' => 'Luxury Suite', 'detail' => 'An opulent suite with high-end furnishings and extra space.', 'price' => 275],
            ['title' => 'Romantic Suite', 'detail' => 'A suite with a romantic ambiance, perfect for couples.', 'price' => 190],
            ['title' => 'Extended Stay Room', 'detail' => 'A room with amenities suited for longer stays.', 'price' => 130],
            ['title' => 'Loft Room', 'detail' => 'A stylish room with a loft area for added space.', 'price' => 150],
            ['title' => 'Studio Room', 'detail' => 'A self-contained room with a kitchenette.', 'price' => 125],
            ['title' => 'Budget Room', 'detail' => 'An economical room with basic amenities.', 'price' => 60],
            ['title' => 'Standard Twin Room', 'detail' => 'A room with two single beds, ideal for friends or colleagues.', 'price' => 85],
            ['title' => 'Luxury Double Room', 'detail' => 'A high-end double room with deluxe features.', 'price' => 140],
            ['title' => 'Presidential Suite', 'detail' => 'The most luxurious suite with multiple rooms and exceptional amenities.', 'price' => 500],
            ['title' => 'City View Room', 'detail' => 'A room offering a view of the city skyline.', 'price' => 120],
            ['title' => 'Heritage Room', 'detail' => 'A room with a historic or traditional design.', 'price' => 150],
            ['title' => 'Spa Suite', 'detail' => 'A suite with a private spa and relaxation area.', 'price' => 250],
            ['title' => 'Wellness Room', 'detail' => 'A room equipped with wellness features like a yoga mat and healthy amenities.', 'price' => 140],
            ['title' => 'Pet-Friendly Room', 'detail' => 'A room where pets are welcome with special amenities.', 'price' => 120],
            ['title' => 'Corporate Room', 'detail' => 'A room with business-oriented features such as a meeting table and extra power outlets.', 'price' => 140],
            ['title' => 'Luxury King Room', 'detail' => 'A premium room with a king-size bed and upscale amenities.', 'price' => 160],
            ['title' => 'Modern Room', 'detail' => 'A contemporary room with modern decor and amenities.', 'price' => 130],
            ['title' => 'Classic Room', 'detail' => 'A room with traditional furnishings and classic design.', 'price' => 110],
            ['title' => 'Art Suite', 'detail' => 'A suite with artistic decor and creative touches.', 'price' => 185],
            ['title' => 'Countryside Room', 'detail' => 'A room with views of the countryside and rural charm.', 'price' => 125],
            ['title' => 'Skyline Suite', 'detail' => 'A suite with panoramic views of the city skyline.', 'price' => 275],
            ['title' => 'Luxury Suite with Terrace', 'detail' => 'A suite featuring a private terrace with exclusive views.', 'price' => 300],
            ['title' => 'Pool View Suite', 'detail' => 'A suite with views of the hotel pool area.', 'price' => 200],
            ['title' => 'Deluxe Studio', 'detail' => 'A spacious studio with upscale furnishings and amenities.', 'price' => 140],
            ['title' => 'Oceanfront Room', 'detail' => 'A room directly facing the ocean with stunning views.', 'price' => 180],
            ['title' => 'Garden Suite', 'detail' => 'A suite with private garden access and outdoor space.', 'price' => 220],
            ['title' => 'Safari Room', 'detail' => 'A themed room inspired by safari adventures.', 'price' => 130],
            ['title' => 'Ski Lodge Room', 'detail' => 'A cozy room ideal for ski enthusiasts, with warm decor.', 'price' => 140],
            ['title' => 'In-Room Dining Suite', 'detail' => 'A suite designed for extensive in-room dining experiences.', 'price' => 250],
            ['title' => 'Seaside Room', 'detail' => 'A room with a close view of the seaside and ocean breezes.', 'price' => 160],
            ['title' => 'Tropical Room', 'detail' => 'A room with tropical decor and a relaxing atmosphere.', 'price' => 130],
            ['title' => 'Mountain Lodge Room', 'detail' => 'A room with rustic charm and mountain views.', 'price' => 145],
            ['title' => 'Cosmic Room', 'detail' => 'A room with a space-themed design and decor.', 'price' => 135],
            ['title' => 'Cottage Room', 'detail' => 'A charming room styled like a cozy cottage.', 'price' => 120],
            ['title' => 'Loft Suite', 'detail' => 'A spacious suite with a modern loft area.', 'price' => 185],
            ['title' => 'Deluxe King Room', 'detail' => 'A king-sized room with deluxe amenities and features.', 'price' => 150],
            ['title' => 'Scenic Room', 'detail' => 'A room with beautiful views of the surrounding landscape.', 'price' => 140],
            ['title' => 'Enchanted Room', 'detail' => 'A room with whimsical and enchanting decor.', 'price' => 130],
            ['title' => 'Ocean Breeze Suite', 'detail' => 'A suite with ocean-inspired decor and a breezy atmosphere.', 'price' => 200],
            ['title' => 'Rustic Suite', 'detail' => 'A suite with a rustic and natural decor style.', 'price' => 175],
            ['title' => 'Glamour Suite', 'detail' => 'A luxurious suite with glamorous and elegant features.', 'price' => 225],
            ['title' => 'Safari Suite', 'detail' => 'A suite designed with safari adventure themes and decor.', 'price' => 200],
            ['title' => 'Zen Room', 'detail' => 'A peaceful room designed for relaxation and mindfulness.', 'price' => 130],
            ['title' => 'Victorian Room', 'detail' => 'A room styled with Victorian-era decor and furnishings.', 'price' => 150],
            ['title' => 'Art Deco Suite', 'detail' => 'A suite featuring Art Deco design elements and style.', 'price' => 180],
        ];

        // Insert the data into the database
        DB::table('room_types')->insert($roomTypes);
    }
}
