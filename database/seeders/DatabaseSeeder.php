<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      $user= User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>'testdb'
        ]);

        $user2= User::factory()->create([
            'name' => 'Test',
            'email' => 'testdb@example.com',
            'password'=>'testdb'
        ]);

        Listing::factory()->create([
            
                "title" => "Software Engineer",
                "user_id"=>$user->id,
                "tags" => "PHP, Laravel, MySQL",
                "company" => "Tech Innovators Inc.",
                "location" => "San Francisco, CA",
                "email" => "hr@techinnovators.com",
                "website" => "https://www.techinnovators.com",
                "description" => "We are looking for a passionate Software Engineer to join our team. Responsibilities include developing scalable web applications, maintaining existing code, and collaborating with cross-functional teams.",
            
        ]);

        Listing::factory()->create(
            [
                "title"=> "Marketing Specialist",
                "user_id"=>$user2->id,
                "tags"=> "SEO, Content Writing, Social Media",
                "company"=> "BrightMark Agency",
                "location"=> "New York, NY",
                "email"=> "careers@brightmark.com",
                "website"=> "https://www.brightmark.com",
                "description"=> "Join our team as a Marketing Specialist! You'll be responsible for creating marketing strategies, managing social media campaigns, and optimizing web content for better visibility.",
                
            ]
            );

            
    }
}
