<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Jenkins',
                'company' => 'EcoFlow Distribution',
                'content' => 'Freiocea transformed our shipping speed. Their expedited service is truly guaranteed.',
                'rating' => 5,
            ],
            [
                'client_name' => 'Michael Chen',
                'company' => 'Global Parts Co.',
                'content' => 'The transparency and tracking are second to none. I always know where my freight is.',
                'rating' => 5,
            ],
            [
                'client_name' => 'Elena Rodriguez',
                'company' => 'Fresh Produce Hub',
                'content' => 'Exceptional handling of perishable goods. Not a single shipment compromised.',
                'rating' => 4,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            \App\Models\Testimonial::create($testimonial);
        }
    }
}
