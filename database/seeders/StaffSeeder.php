<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = [];

        // Sample salary types
        $salaryTypes = ['Daily', 'Monthly'];

        // Assuming department IDs range from 1 to 10 (Adjust according to your data)
        $departmentIds = range(1, 10);

        // Generate 100 staff records
        for ($i = 1; $i <= 100; $i++) {
            $fullName = $this->generateRandomFullName();
            $departmentId = $departmentIds[array_rand($departmentIds)];
            $photo = $this->generateRandomPhotoUrl();
            $bio = $this->generateRandomBio();
            $salaryType = $salaryTypes[array_rand($salaryTypes)];
            $salaryAmount = rand(30000, 100000); // Adjust as needed

            $staff[] = [
                'full_name' => $fullName,
                'department_id' => $departmentId,
                'photo' => $photo,
                'bio' => $bio,
                'salary_type' => $salaryType,
                'salary_amount' => $salaryAmount,
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ];
        }

        // Insert data into the staff table
        \Illuminate\Support\Facades\DB::table('staff')->insert($staff);
    }

    private function generateRandomFullName()
    {
        $firstNames = ['John', 'Jane', 'Michael', 'Emily', 'Chris', 'Katie', 'David', 'Laura', 'James', 'Sarah'];
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];

        return $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)];
    }

    private function generateRandomPhotoUrl()
    {
        return 'https://randomuser.me/api/portraits/men/' . rand(1, 99) . '.jpg'; // Adjust for women or generic
    }

    private function generateRandomBio()
    {
        $bios = [
            'Experienced professional with a strong background in customer service.',
            'Passionate about technology and software development.',
            'Skilled in project management and team leadership.',
            'Dedicated to delivering exceptional client support.',
            'Creative thinker with a talent for problem-solving.',
            'Detail-oriented and committed to achieving results.',
            'Enthusiastic about data analysis and research.',
            'Adept at managing multiple tasks and meeting deadlines.',
            'Excellent communicator with a knack for negotiation.',
            'Proven ability to work effectively in fast-paced environments.',
        ];

        return $bios[array_rand($bios)];
    }
}
