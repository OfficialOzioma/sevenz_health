<?php

namespace Database\Seeders;

use App\Models\LabTests;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleTest = [
            ['name' => 'Chest', 'category' => 'Xray'],
            ['name' => 'Cervical vertebrae', 'category' => 'Xray'],
            ['name' => 'Thoracic vertebrae', 'category' => 'Xray'],
            ['name' => 'Lumvar vertebrae', 'category' => 'Xray'],
            ['name' => 'Lumbo sacral vertebrae', 'category' => 'Xray'],
            ['name' => 'Thoraco lumbra vertebrae', 'category' => 'Xray'],
            ['name' => 'Wrist joint', 'category' => 'Xray'],
            ['name' => 'Thoracic inlet', 'category' => 'Xray'],
            ['name' => 'shoulder joint', 'category' => 'Xray'],
            ['name' => 'Elbow joint', 'category' => 'Xray'],
            ['name' => 'Kneel joint', 'category' => 'Xray'],
            ['name' => 'Sacro lliac joint', 'category' => 'Xray'],
            ['name' => 'Pelvic joint', 'category' => 'Xray'],
            ['name' => 'Hip joint', 'category' => 'Xray'],
            ['name' => 'Femoral', 'category' => 'Xray'],
            ['name' => 'Ankle', 'category' => 'Xray'],
            ['name' => 'Humerus', 'category' => 'Xray'],
            ['name' => 'Foot', 'category' => 'Xray'],
            ['name' => 'Tibia/Fibula', 'category' => 'Xray'],
            ['name' => 'fingers', 'category' => 'Xray'],
            ['name' => 'Toes', 'category' => 'Xray'],

            ['name' => 'Obstetric', 'category' => 'Ultrasound scan'],
            ['name' => 'Abdioninal', 'category' => 'Ultrasound scan'],
            ['name' => 'Pelvis', 'category' => 'Ultrasound scan'],
            ['name' => 'Prostrate', 'category' => 'Ultrasound scan'],
            ['name' => 'Breast', 'category' => 'Ultrasound scan'],
            ['name' => 'Thyroid', 'category' => 'Ultrasound scan'],
        ];

        // LabTests::truncate();

        foreach ($createMultipleTest as $tests) {
            LabTests::create($tests);
        }
    }
}
