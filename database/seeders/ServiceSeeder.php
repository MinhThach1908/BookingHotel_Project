<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [];

        // Generate 50 hotel services records
        for ($i = 1; $i <= 50; $i++) {
            $title = $this->generateRandomTitle();
            $smallDesc = $this->generateRandomSmallDesc();
            $detailDesc = $this->generateRandomDetailDesc();
            $photo = $this->generateRandomPhotoUrl();

            $services[] = [
                'title' => $title,
                'small_desc' => $smallDesc,
                'detail_desc' => $detailDesc,
                'photo' => $photo,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ];
        }

        // Insert data into the hotel_services table
        \Illuminate\Support\Facades\DB::table('services')->insert($services);
    }

    private function generateRandomTitle()
    {
        $titles = [
            'Free Wi-Fi', '24/7 Room Service', 'Spa Services', 'Fitness Center',
            'Airport Shuttle', 'Concierge Service', 'Business Center', 'Pool',
            'Restaurant', 'Bar', 'Laundry Service', 'Pet Friendly',
            'Valet Parking', 'Meeting Rooms', 'Event Planning', 'Massage Therapy',
            'Daily Housekeeping', 'In-Room Dining', 'Private Dining', 'Car Rental',
            'Tour Desk', 'Library', 'Conference Facilities', 'Wedding Services',
            'Golf Course Access', 'Bicycle Rentals', 'Beach Access', 'Rooftop Bar',
            'Sauna', 'Steam Room', 'Hot Tub', 'Fishing Trips', 'Ski Passes',
            'Tennis Court', 'Horseback Riding', 'Adventure Tours', 'Kids Club',
            'Babysitting Services', 'Gift Shop', 'Grocery Delivery', 'Personal Trainer',
            'Yoga Classes', 'Cooking Classes', 'Cultural Tours', 'Wine Tasting',
            'Ski Equipment Rental', 'Beachfront Cabana', 'Cigar Lounge', 'Helicopter Tours'
        ];

        return $titles[array_rand($titles)];
    }

    private function generateRandomSmallDesc()
    {
        $descriptions = [
            'Enjoy complimentary high-speed internet throughout the property.',
            'Order from a variety of dishes at any time of the day or night.',
            'Relax and rejuvenate with our professional spa services.',
            'Stay fit with our fully-equipped fitness center.',
            'Convenient transportation to and from the airport.',
            'Get personalized recommendations and assistance from our concierge team.',
            'Access business amenities including computers and printing services.',
            'Swim and unwind in our outdoor or indoor pool.',
            'Savor delicious meals at our on-site restaurant.',
            'Enjoy a wide selection of beverages at our bar.',
            'Keep your clothes fresh and clean with our laundry services.',
            'Bring your furry friends along with our pet-friendly accommodations.',
            'Experience hassle-free parking with our valet service.',
            'Host your meetings in our well-equipped rooms.',
            'Plan and execute events with the help of our planning services.',
            'Indulge in soothing massages and therapies.',
            'Benefit from daily cleaning and maintenance of your room.',
            'Order food and drinks directly to your room with our in-room dining.',
            'Experience intimate dining in a private setting.',
            'Rent a car easily with our car rental service.',
            'Get assistance in planning your excursions and activities.',
            'Relax in our cozy library with a good book.',
            'Host your conferences and large gatherings in our facilities.',
            'Plan your dream wedding with our dedicated services.',
            'Enjoy golf at a nearby course with special access.',
            'Rent bicycles to explore the area at your own pace.',
            'Access beautiful beach areas directly from the hotel.',
            'Enjoy drinks and views from our rooftop bar.',
            'Unwind in our sauna and steam room.',
            'Relax in our hot tub after a long day.',
            'Participate in organized fishing trips and enjoy the catch of the day.',
            'Get ski passes and enjoy winter sports.',
            'Play tennis at our on-site courts.',
            'Experience horseback riding through scenic trails.',
            'Join exciting adventure tours around the area.',
            'Keep the kids entertained with our fun and engaging kids club.',
            'Avail babysitting services for a worry-free night out.',
            'Shop for souvenirs and essentials in our gift shop.',
            'Order groceries and have them delivered to your room.',
            'Stay fit with sessions from a personal trainer.',
            'Join yoga classes to improve your flexibility and relaxation.',
            'Learn new culinary skills with our cooking classes.',
            'Explore local culture with guided cultural tours.',
            'Sample fine wines with our exclusive wine tasting events.',
            'Rent ski equipment for your winter sports needs.',
            'Relax in a private beachfront cabana.',
            'Enjoy a premium selection of cigars in our lounge.',
            'Take in breathtaking views with a helicopter tour.'
        ];

        return $descriptions[array_rand($descriptions)];
    }

    private function generateRandomDetailDesc()
    {
        $details = [
            'Our free Wi-Fi service ensures you stay connected throughout the hotel. Available in all rooms and public areas.',
            'Enjoy 24/7 room service with a diverse menu offering breakfast, lunch, dinner, and snacks anytime you desire.',
            'Our spa offers a range of treatments including massages, facials, and body treatments to help you unwind and relax.',
            'The fitness center features modern equipment including treadmills, ellipticals, free weights, and more.',
            'Our airport shuttle service is available at all hours to ensure a smooth and convenient transfer to and from the airport.',
            'Our concierge team is here to assist you with reservations, recommendations, and any special requests to enhance your stay.',
            'The business center is equipped with computers, printers, and other amenities to help you stay productive while traveling.',
            'The hotel offers both indoor and outdoor pools for your enjoyment, complete with loungers and towel service.',
            'Dine in style at our restaurant, which offers a diverse menu with local and international cuisine in a relaxed setting.',
            'Our bar serves a wide selection of cocktails, wines, and beers, perfect for unwinding after a long day.',
            'Our laundry service ensures that your clothes are cleaned and returned promptly, including pressing and folding services.',
            'We welcome your pets with open arms and offer amenities to make their stay as comfortable as yours.',
            'Our valet service takes the hassle out of parking, ensuring your vehicle is safely parked and easily accessible.',
            'Our meeting rooms are designed to accommodate various sizes and are equipped with the latest technology for successful events.',
            'Our event planning services include everything from initial concept to execution, ensuring a seamless experience.',
            'Our massage therapy services include various techniques to relieve tension and promote overall well-being.',
            'Daily housekeeping ensures your room is clean and comfortable, with fresh linens and amenities replenished as needed.',
            'Enjoy the convenience of ordering meals directly to your room, with a menu that caters to a variety of tastes and dietary needs.',
            'For a more intimate dining experience, our private dining options provide a secluded setting with personalized service.',
            'Our car rental service makes it easy to explore the area at your own pace, with a range of vehicles available for your convenience.',
            'The tour desk can assist you in planning and booking local excursions, sightseeing tours, and other activities.',
            'Our library offers a peaceful retreat with a selection of books and comfortable seating for reading and relaxation.',
            'Our conference facilities are designed to host large groups with flexible seating arrangements and comprehensive support services.',
            'Our wedding services include planning, coordination, and execution to make your special day unforgettable.',
            'Take advantage of our special access to nearby golf courses, including tee times and rental equipment if needed.',
            'Explore the local area with bicycle rentals, available for short-term or extended use to suit your preferences.',
            'Enjoy direct access to pristine beaches with dedicated areas for sunbathing, swimming, and beachside activities.',
            'Our rooftop bar offers stunning views, a relaxed atmosphere, and a selection of premium beverages for a memorable experience.',
            'Relax and rejuvenate in our sauna and steam room, which provide a perfect way to unwind after a workout or a day out.',
            'Our hot tub is ideal for soaking and relaxing, with soothing jets to ease muscle tension and provide comfort.',
            'Join our fishing trips to experience the best local fishing spots, with all necessary gear and guidance provided.',
            'Our ski pass service includes access to local ski resorts, with options for equipment rental and lessons if desired.',
            'Enjoy friendly competition and exercise on our tennis courts, available for casual play or organized tournaments.',
            'Explore scenic trails on horseback, with guided rides available for all skill levels and experience.',
            'Join our adventure tours to experience thrilling activities such as zip-lining, hiking, and off-road excursions.',
            'Our kids club provides a range of activities and entertainment for children, ensuring they have a fun and engaging stay.',
            'Our babysitting services offer a trusted and caring option for parents who need some time away from their children.',
            'Visit our gift shop for unique souvenirs, local products, and essentials to remember your stay by.',
            'Order groceries and have them delivered directly to your room, making it easy to enjoy meals and snacks in the comfort of your space.',
            'Our personal trainers offer customized fitness programs and one-on-one sessions to help you achieve your health goals.',
            'Join our yoga classes to improve flexibility, balance, and relaxation in a supportive and peaceful environment.',
            'Learn new cooking techniques and recipes in our hands-on cooking classes, led by experienced chefs.',
            'Discover local culture with guided tours that provide insight into the region’s history, art, and traditions.',
            'Participate in exclusive wine tasting events to sample a curated selection of fine wines and expand your palate.',
            'Rent ski equipment from our selection, including skis, poles, boots, and helmets, to ensure a great winter sports experience.',
            'Relax in a private beachfront cabana with comfortable seating and personalized service for a luxurious beach experience.',
            'Enjoy a premium selection of cigars in our sophisticated lounge, complete with a relaxing atmosphere and expert recommendations.',
            'Experience breathtaking views and unique perspectives with our helicopter tours, providing an unforgettable adventure.'
        ];

        return $details[array_rand($details)];
    }

    private function generateRandomPhotoUrl()
    {
        return 'https://picsum.photos/200/300?random=' . rand(1, 100); // Adjust as needed
    }
}
