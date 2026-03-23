<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            'site_name' => 'Freiocea Logistics',
            'email' => 'solutions@freiocea.com',
            'phone' => '+1 (555) FREIGHT',
            'address' => "123 Logistics Way\nSuite 500\nOceanview, CA 90210",
            'meta_description' => 'Freiocea Logistics provides premium, dynamic freight solutions including FTL, LTL, and expedited shipping with real-time tracking.',
        ];

        foreach ($settings as $key => $value) {
            \App\Models\Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
