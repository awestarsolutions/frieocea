<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'section_key' => 'hero',
                'content' => [
                    'title' => 'Fast, Reliable, & Global Logistics Solutions',
                    'subtitle' => 'Freiocea Logistics delivers your promises with precision and speed. Connecting businesses to the world.',
                    'cta_text' => 'Get a Quote',
                    'cta_link' => '/contact',
                    'accent_text' => 'Premium Global Service',
                ],
                'is_visible' => true,
            ],
            [
                'section_key' => 'trust_metrics',
                'content' => [
                    'metrics' => [
                        ['label' => 'Countries Covered', 'value' => '120+'],
                        ['label' => 'Happy Clients', 'value' => '5k+'],
                        ['label' => 'On-time Delivery', 'value' => '99.9%'],
                    ]
                ],
                'is_visible' => true,
            ],
            [
                'section_key' => 'why_choose_us',
                'content' => [
                    'title' => 'Why Businesses Trust Freiocea',
                    'items' => [
                        ['title' => 'Real-time Tracking', 'description' => 'Monitor your shipments any time, any where.'],
                        ['title' => 'Global Network', 'description' => 'Strong partnerships across every major continent.'],
                        ['title' => 'Safety First', 'description' => 'Zero damage guarantee with our specialized handling.'],
                    ]
                ],
                'is_visible' => true,
            ],
            [
                'section_key' => 'how_it_works',
                'content' => [
                    'title' => 'Seamless Process',
                    'steps' => [
                        ['title' => 'Book', 'description' => 'Provide details and pick your speed.'],
                        ['title' => 'Track', 'description' => 'Real-time visibility through every hub.'],
                        ['title' => 'Receive', 'description' => 'Secure and timely arrival at destination.'],
                    ]
                ],
                'is_visible' => true,
            ],
            [
                'section_key' => 'cta_section',
                'content' => [
                    'title' => 'Ready to Move Your Cargo?',
                    'subtitle' => 'Join thousands of businesses scaling with Freiocea Logistics.',
                    'button_text' => 'Start Your Journey',
                ],
                'is_visible' => true,
            ],
        ];

        foreach ($sections as $section) {
            \App\Models\HomeSection::updateOrCreate(
                ['section_key' => $section['section_key']],
                ['content' => $section['content'], 'is_visible' => $section['is_visible']]
            );
        }
    }
}
