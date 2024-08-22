<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [];

        // Assuming customer IDs range from 1 to 50 (Adjust according to your data)
        $customerIds = range(1, 50);

        // Generate 100 customer feedback records
        for ($i = 1; $i <= 100; $i++) {
            $customerId = $customerIds[array_rand($customerIds)];
            $feedbackContent = $this->generateRandomFeedback();

            $feedbacks[] = [
                'customer_id' => $customerId,
                'feedback_content' => $feedbackContent,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ];
        }

        // Insert data into the customer_feedback table
        \Illuminate\Support\Facades\DB::table('feedback')->insert($feedbacks);
    }

    private function generateRandomFeedback()
    {
        $feedbacks = [
            'Great service, very satisfied with my stay!',
            'The room was clean and comfortable, but the noise from the street was a bit disturbing.',
            'The staff were very friendly and helpful. Will definitely come back.',
            'The check-in process was quick and smooth, but the breakfast options were limited.',
            'Excellent amenities and a beautiful view from the room. Highly recommend!',
            'The hotel was okay, but the Wi-Fi connection was unreliable.',
            'I had a wonderful experience. The spa services were fantastic.',
            'The location was perfect, but the parking situation was inconvenient.',
            'Service was slow at the restaurant, but the food was delicious.',
            'The room was smaller than expected, but overall it was a pleasant stay.',
            'Great value for the money. The staff went above and beyond.',
            'The pool area was nice, but the water was a bit cold.',
            'Enjoyed the free shuttle service to the airport. Very convenient!',
            'The room was well-decorated, but the bed was too soft for my liking.',
            'The hotel had a charming atmosphere, but the elevator was often out of service.',
            'Very pleased with the cleanliness of the hotel. Will stay again.',
            'The hotel exceeded my expectations. The customer service was exceptional.',
            'The amenities were top-notch, but the noise from the hallway was disruptive.',
            'Enjoyed the complimentary breakfast, but the coffee could be improved.',
            'The staff were helpful, but the room had a musty smell.',
            'Had a relaxing stay. The massage at the spa was very rejuvenating.',
            'The hotel is in a great location, but the check-out process was lengthy.',
            'The room was spacious and comfortable, but the air conditioning was noisy.',
            'Great experience overall. The hotel met all my needs.',
            'The restaurant had a limited menu, but the food was tasty.',
            'The hotel was clean, but the parking lot was poorly lit.',
            'The staff were very accommodating. The stay was enjoyable.',
            'The hotel had a nice ambiance, but the Wi-Fi was spotty.',
            'The bed was very comfortable, but the room could use more lighting.',
            'The view from the room was spectacular. I enjoyed my stay.',
            'The hotel was well-maintained, but the elevator was slow.',
            'The staff were friendly, but the room service took too long.',
            'The gym facilities were good, but the pool area could be improved.',
            'The location was excellent, but the noise from the bar downstairs was annoying.',
            'The hotel was clean and comfortable, but the check-in staff were unprofessional.',
            'The breakfast spread was good, but the breakfast area was crowded.',
            'The hotel offered good value, but the decor was outdated.',
            'The staff provided excellent service, but the room was too warm.',
            'The hotel had a cozy feel, but the bathroom could use an update.',
            'The room was quiet and peaceful, but the Wi-Fi was slow.',
            'Great stay. The hotel was well-located and the room was comfortable.',
            'The amenities were good, but the air conditioning unit was loud.',
            'The staff were helpful, but the elevator was often full.',
            'The hotel had a nice design, but the restaurant was overpriced.',
            'Enjoyed the stay. The hotel met my expectations.',
            'The hotel was clean, but the front desk staff could be more friendly.',
            'The room had a great view, but the bathroom was small.',
            'Great service and clean rooms. I would return.',
            'The staff were very courteous, but the parking was expensive.',
            'The hotel was comfortable, but the internet connection was unreliable.',
            'The room was spacious, but the bed was uncomfortable.',
            'The stay was enjoyable, but the noise from the street was distracting.',
            'The hotel offered a good breakfast, but the selection was limited.',
            'The room was modern, but the shower was small.',
            'The location was convenient, but the hotel lacked character.',
            'The staff were friendly, but the hotel could use some renovations.',
            'The stay was pleasant, but the hotel needs better soundproofing.',
            'The room was clean, but the air conditioning was not effective.',
            'Great stay overall. The hotel offered good amenities.',
            'The room was well-appointed, but the Wi-Fi was slow.',
            'The hotel had a nice atmosphere, but the room was small.',
            'The staff were helpful, but the hotel could use a facelift.',
            'The location was excellent, but the breakfast area was cramped.',
            'The room was clean, but the furniture was outdated.',
            'The staff provided great service, but the elevator was slow.',
            'The hotel was quiet and comfortable, but the breakfast could be improved.',
            'The stay was enjoyable, but the room could use more amenities.',
            'The hotel had a good location, but the decor was dated.',
            'The staff were excellent, but the hotel lacked amenities.',
            'The room was comfortable, but the hotel was hard to find.',
            'Great experience. The staff were professional and the room was clean.',
            'The hotel was nice, but the breakfast options were limited.',
            'The room was spacious, but the decor was uninspired.',
            'The hotel offered good value, but the noise from the hallway was disturbing.',
            'The staff were attentive, but the hotel could use a renovation.',
            'The stay was pleasant, but the room could use more lighting.',
            'The hotel had a good atmosphere, but the elevator was slow.',
            'The room was clean, but the furniture was worn.',
            'Great location, but the hotel needs better soundproofing.',
            'The staff were friendly, but the breakfast area was crowded.',
            'The hotel was comfortable, but the internet was slow.',
            'The room had a nice view, but the decor was outdated.',
            'The hotel was clean and well-maintained, but the Wi-Fi was spotty.',
            'The stay was enjoyable, but the hotel needs more modern amenities.',
            'The staff provided good service, but the room was small.',
            'The hotel had a good location, but the breakfast could be better.',
            'The room was spacious, but the furniture was dated.',
            'The hotel was pleasant, but the Wi-Fi connection was unreliable.',
            'The staff were courteous, but the elevator was often full.',
            'The room was clean, but the air conditioning was noisy.',
            'Great service overall. The staff were helpful and the room was comfortable.',
            'The hotel was nice, but the breakfast options were minimal.',
            'The room had a good view, but the decor was plain.',
            'The stay was good, but the hotel needs some updating.',
            'The staff were excellent, but the room could use more amenities.',
            'The hotel was comfortable, but the Wi-Fi connection was weak.',
            'The room was well-maintained, but the hotel decor was outdated.',
            'The location was ideal, but the breakfast area was small.',
            'The hotel was clean, but the staff could be more attentive.',
            'The room was cozy, but the noise from the hallway was bothersome.',
            'Great experience. The staff were friendly and the amenities were good.',
            'The hotel was well-located, but the room was small.',
            'The staff were helpful, but the breakfast options were limited.',
            'The hotel had a good atmosphere, but the Wi-Fi connection was slow.',
            'The room was clean, but the decor was dated.',
            'The stay was pleasant, but the elevator was often full.',
            'The hotel offered good value, but the furniture in the room was worn.',
            'The staff were attentive, but the breakfast area was crowded.',
            'The hotel was comfortable, but the air conditioning was noisy.',
            'The room had a nice view, but the bathroom was small.',
            'Great stay overall. The hotel met all my expectations.',
            'The hotel had a good location, but the Wi-Fi was slow.',
            'The staff were friendly, but the room was smaller than expected.',
            'The hotel was clean and comfortable, but the decor was outdated.',
            'The room was spacious, but the breakfast options were limited.',
        ];

        return $feedbacks[array_rand($feedbacks)];
    }
}
