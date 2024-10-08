<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomTypeIds = DB::table('room_types')->pluck('id')->toArray();

        if (empty($roomTypeIds)) {
            throw new \Exception('No room types found in the database.');
        }

        $roomDetails = [
            'Cozy single room with a queen-sized bed and a beautiful view of the city skyline.',
            'Spacious double room featuring a king-sized bed and a private balcony.',
            'Elegant room with a modern design, perfect for business travelers.',
            'Luxurious suite with a separate living room and a stunning ocean view.',
            'Contemporary room equipped with the latest technology and high-speed internet.',
            'Rustic room with wooden accents and a cozy fireplace for a warm atmosphere.',
            'Bright and airy room with large windows and a minimalist design.',
            'Deluxe room with a large bed, a mini-fridge, and a stylish bathroom.',
            'Romantic suite with a whirlpool tub and a panoramic view of the mountains.',
            'Family-friendly room with multiple beds and a kid’s play area.',
            'Elegant room with a high ceiling, perfect for a luxurious stay.',
            'Modern room with a spacious work desk and ergonomic chair for business guests.',
            'Beachfront room with direct access to the sand and sea.',
            'Chic room with designer furnishings and a sleek, modern bathroom.',
            'Comfortable room with a sofa bed and a coffee maker for added convenience.',
            'Suite with a private terrace and an outdoor hot tub for relaxation.',
            'Affordable room with essential amenities and a clean, comfortable space.',
            'Trendy room with vibrant decor and a youthful, energetic vibe.',
            'Opulent room with premium bedding and an elegant, sophisticated design.',
            'Quiet room with soundproof walls and a tranquil atmosphere for restful sleep.',
            'Functional room with accessible features and an easy layout for all guests.',
            'Luxurious room with a lavish bed and a personal butler service.',
            'Comfortable room with a large flat-screen TV and a selection of premium channels.',
            'Classic room with traditional furnishings and a cozy ambiance.',
            'Sleek room with high-tech gadgets and a modern, streamlined look.',
            'Cozy room with a beautiful view of the hotel’s lush gardens.',
            'Stylish room with contemporary art pieces and chic decor.',
            'Family suite with separate sleeping areas and a large living space.',
            'Boutique room with unique, personalized decor and a special touch.',
            'Scenic room with floor-to-ceiling windows and breathtaking views.',
            'Executive room with a large desk, office supplies, and a conference area.',
            'Bright and airy room with fresh, modern decor and comfortable bedding.',
            'Inviting room with plush seating and a warm, welcoming atmosphere.',
            'Deluxe suite with an expansive living area and premium amenities.',
            'Cozy retreat with a comfortable bed and a homey feel.',
            'Elegant suite with a luxurious bath and upscale furnishings.',
            'Minimalist room with clean lines and a serene, uncluttered design.',
            'Spacious room with a king-sized bed and a walk-in closet.',
            'Rustic room with a charming, cabin-like feel and modern comforts.',
            'Trendy room with funky, eclectic decor and vibrant colors.',
            'Luxurious suite with a grand entrance and opulent living quarters.',
            'Contemporary room with a focus on comfort and style.',
            'Stylish room with a unique layout and modern amenities.',
            'Affordable suite with basic amenities and a comfortable design.',
            'Private room with a secluded atmosphere and exclusive features.',
            'Charming room with a classic design and cozy atmosphere.',
            'Elegant suite with a separate lounge and luxurious furnishings.',
            'Cozy room with vintage charm and modern conveniences.',
            'Functional room with everything needed for a comfortable stay.',
            'Sleek room with a contemporary design and high-end features.',
            'Comfortable suite with separate sleeping and living areas.',
            'Inviting room with a warm decor and a relaxing ambiance.',
            'Stylish suite with an artistic flair and comfortable design.',
            'Contemporary room with smart home features and a modern aesthetic.',
            'Chic room with elegant decor and high-quality furnishings.',
            'Affordable room with clean, comfortable accommodations and essential amenities.',
            'Cozy room with a welcoming atmosphere and homely decor.',
            'Modern suite with spacious living areas and upscale amenities.',
            'Elegant room with a luxurious bed and sophisticated furnishings.',
            'Bright room with a cheerful design and comfortable amenities.',
            'Spacious suite with a stunning view and ample living space.',
            'Charming room with a unique character and cozy feel.',
            'Opulent suite with premium features and a grand design.',
            'Trendy room with modern decor and an energetic atmosphere.',
            'Quiet suite with a serene environment and upscale amenities.',
            'Functional room with practical features and a comfortable layout.',
            'Stylish room with a contemporary design and convenient amenities.',
            'Luxurious room with high-end furnishings and a lavish atmosphere.',
            'Cozy suite with a comfortable living area and inviting decor.',
            'Bright room with a modern design and cheerful ambiance.',
            'Comfortable suite with elegant decor and practical amenities.',
            'Chic room with a sleek design and upscale features.',
            'Family-friendly suite with ample space and comfortable accommodations.',
            'Private room with a secluded design and personal touches.',
            'Elegant room with luxurious amenities and refined decor.',
            'Trendy suite with vibrant decor and modern conveniences.',
            'Inviting room with a warm atmosphere and cozy furnishings.',
            'Sleek room with a modern aesthetic and comfortable features.',
            'Spacious suite with a grand design and high-quality amenities.',
            'Classic room with timeless decor and a comfortable setting.',
            'Contemporary suite with stylish design and modern comforts.',
            'Comfortable room with a relaxing ambiance and inviting decor.',
            'Luxurious room with premium furnishings and a sophisticated design.',
            'Charming suite with a unique character and elegant decor.',
            'Stylish room with modern amenities and a chic design.',
            'Bright suite with a cheerful atmosphere and contemporary features.',
            'Cozy room with a welcoming environment and comfortable furnishings.',
            'Elegant room with upscale amenities and a refined ambiance.',
            'Private suite with a secluded feel and luxurious features.',
            'Family room with ample space and a comfortable layout.',
            'Inviting room with a cozy decor and practical amenities.',
            'Sleek suite with a modern design and high-end features.',
            'Spacious room with a grand layout and luxurious amenities.',
            'Comfortable suite with a warm atmosphere and inviting decor.',
            'Stylish room with elegant furnishings and a chic design.',
            'Bright suite with cheerful decor and modern conveniences.',
            'Luxurious room with high-quality amenities and a sophisticated ambiance.',
            'Cozy room with a comfortable design and inviting atmosphere.',
            'Trendy suite with vibrant decor and upscale features.',
            'Elegant room with refined decor and practical amenities.',
            'Spacious room with a grand design and luxurious comforts.',
            'Charming suite with unique decor and a cozy feel.',
            'Comfortable room with modern amenities and a relaxing ambiance.',
            'Stylish suite with a contemporary design and upscale furnishings.',
            'Bright room with a cheerful atmosphere and practical features.',
            'Luxurious suite with premium decor and a sophisticated design.',
            'Inviting room with a cozy environment and comfortable furnishings.',
            'Modern suite with high-end features and elegant decor.',
            'Chic room with a stylish design and contemporary amenities.',
            'Cozy suite with a warm ambiance and inviting decor.',
            'Elegant room with upscale amenities and a refined atmosphere.',
            'Spacious suite with a grand design and comfortable features.',
            'Comfortable room with modern conveniences and a relaxing setting.',
            'Trendy suite with vibrant decor and high-quality furnishings.',
            'Private room with a secluded feel and luxurious features.',
            'Bright suite with cheerful decor and modern amenities.',
            'Elegant room with refined design and comfortable accommodations.',
            'Stylish suite with a contemporary look and upscale comforts.',
            'Cozy room with a welcoming atmosphere and practical amenities.',
            'Luxurious suite with premium decor and a sophisticated ambiance.',
            'Inviting room with a comfortable layout and elegant furnishings.',
            'Modern room with a sleek design and high-end features.',
            'Charming suite with unique decor and cozy atmosphere.',
            'Comfortable room with practical amenities and a relaxing ambiance.',
            'Stylish suite with a chic design and upscale features.',
            'Bright room with cheerful decor and modern conveniences.',
            'Luxurious room with high-quality amenities and sophisticated design.',
            'Cozy suite with a warm ambiance and inviting decor.',
            'Elegant room with refined decor and practical comforts.',
            'Spacious suite with a grand design and luxurious features.',
            'Comfortable room with a relaxing atmosphere and modern amenities.',
            'Trendy suite with vibrant decor and high-end comforts.',
            'Stylish room with a contemporary design and elegant furnishings.',
            'Inviting room with a cozy environment and comfortable amenities.',
            'Modern suite with upscale features and a sleek design.',
            'Charming room with unique decor and a cozy feel.',
            'Luxurious suite with premium furnishings and a sophisticated ambiance.',
        ];

        $roomViewImages = [
            'images/room01.jpg',
            'images/room02.jpg',
            'images/room03.jpg',
            'images/room04.jpg',
            'images/room05.jpg',
            'images/room06.jpg',
            'images/room07.jpg',
            'images/room08.jpg',
            'images/room09.jpg',
            'images/room10.jpg',
            'images/room11.jpg',
            'images/room12.jpg',
            'images/room13.jpg',
            'images/room14.jpg',
            'images/room15.jpg',
            'images/room16.jpg',
            'images/room17.jpg',
            'images/room18.jpg',
            'images/room19.jpg',
            'images/room20.jpg',
            'images/room21.jpg',
            'images/room22.jpg',
            'images/room23.jpg',
            'images/room24.jpg',
            'images/room25.jpg',
            'images/room26.jpg',
            'images/room27.jpg',
            'images/room28.jpg',
            'images/room29.jpg',
            'images/room30.jpg',
            'images/room31.jpg',
            'images/room32.jpg',
            'images/room33.jpg',
            'images/room34.jpg',
            'images/room35.jpg',
            'images/room36.jpg',
            'images/room37.jpg',
            'images/room38.jpg',
            'images/room39.jpg',
            'images/room40.jpg',
            'images/room41.jpg',
            'images/room42.jpg',
            'images/room43.jpg',
            'images/room44.jpg',
            'images/room45.jpg',
            'images/room46.jpg',
            'images/room47.jpg',
            'images/room48.jpg',
            'images/room49.jpg',
            'images/room50.jpg',
            'images/room51.jpg',
            'images/room52.jpg',
            'images/room53.jpg',
            'images/room54.jpg',
            'images/room55.jpg',
            'images/room56.jpg',
            'images/room57.jpg',
            'images/room58.jpg',
            'images/room59.jpg',
            'images/room60.jpg',
            'images/room61.jpg',
            'images/room62.jpg',
            'images/room63.jpg',
            'images/room64.jpg',
            'images/room65.jpg',
            'images/room66.jpg',
            'images/room67.jpg',
            'images/room68.jpg',
            'images/room69.jpg',
            'images/room70.jpg',
            'images/room71.jpg',
            'images/room72.jpg',
            'images/room73.jpg',
            'images/room74.jpg',
            'images/room75.jpg',
            'images/room76.jpg',
            'images/room77.jpg',
            'images/room78.jpg',
            'images/room79.jpg',
            'images/room80.jpg',
            'images/room81.jpg',
            'images/room82.jpg',
            'images/room83.jpg',
            'images/room84.jpg',
            'images/room85.jpg',
            'images/room86.jpg',
            'images/room87.jpg',
            'images/room88.jpg',
            'images/room89.jpg',
            'images/room90.jpg',
            'images/room91.jpg',
            'images/room92.jpg',
            'images/room93.jpg',
            'images/room94.jpg',
            'images/room95.jpg',
            'images/room96.jpg',
            'images/room97.jpg',
            'images/room98.jpg',
            'images/room99.jpg',
            'images/room100.jpg',
        ];

        $rooms = [];
        $numberOfRooms = count($roomDetails);

        for ($i = 1; $i <= $numberOfRooms; $i++) {
            $formattedIndex = str_pad($i, 2, '0', STR_PAD_LEFT); // Format index as two digits (01, 02, ..., 100)
            $rooms[] = [
                'title' => 'Room ' . $formattedIndex,
                'room_detail' => $roomDetails[$i - 1],
                'room_view_image' => $roomViewImages[$i - 1],
                'room_type_id' => $roomTypeIds[array_rand($roomTypeIds)], // Randomly select a room type ID
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert rooms into the database
        DB::table('rooms')->insert($rooms);
    }
}
