<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Full Truckload (FTL)',
                'slug' => 'full-truckload',
                'icon' => 'fire_truck',
                'description' => 'Exclusive capacity for large shipments requiring dedicated direct transit across long distances.',
                'benefits' => ['Dedicated capacity', 'Faster transit times', 'Reduced handling risk'],
                'use_cases' => ['Bulk retail inventory', 'Manufacturing raw materials', 'Industrial equipment'],
            ],
            [
                'title' => 'Less-Than-Truckload (LTL)',
                'slug' => 'less-than-truckload',
                'icon' => 'package_2',
                'description' => 'Cost-effective shipping for smaller freight volumes without compromising on delivery speed.',
                'benefits' => ['Pay only for space used', 'Frequent departures', 'Extensive terminal network'],
                'use_cases' => ['Small business inventory', 'E-commerce fulfillment', 'Parcel consolidation'],
            ],
            [
                'title' => 'Expedited Shipping',
                'slug' => 'expedited-shipping',
                'icon' => 'bolt',
                'description' => 'Time-critical logistics for urgent shipments that need to be delivered within tight windows.',
                'benefits' => ['Guaranteed delivery times', 'Priority handling', '24/7 proactive monitoring'],
                'use_cases' => ['Emergency spare parts', 'Perishable goods', 'Legal documents'],
            ],
            [
                'title' => 'Smart Warehousing',
                'slug' => 'smart-warehousing',
                'icon' => 'warehouse',
                'description' => 'Strategic storage solutions with real-time inventory management and seamless distribution.',
                'benefits' => ['Advanced WMS', 'Scalable storage space', 'Pick & pack services'],
                'use_cases' => ['Overflow inventory', 'Regional distribution', 'Seasonal surges'],
            ],
        ];

        foreach ($services as $service) {
            \App\Models\Service::updateOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
