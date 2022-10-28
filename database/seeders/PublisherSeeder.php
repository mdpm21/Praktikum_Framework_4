<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'pengembang' => 'Namco',
                'mesin' => 'Unity',
                'perangkat' => 'Arcade'
            ],
            [
                'pengembang' => 'Nintendo',
                'mesin' => 'Havok',
                'perangkat' => 'Console'
            ],
            [
                'pengembang' => 'Midway',
                'mesin' => 'Unreal Engine 3',
                'perangkat' => 'Arcade'
            ],
            [
                'pengembang' => 'Ultimate Game',
                'mesin' => 'Unity',
                'perangkat' => 'Console'
            ],
            [
                'pengembang' => 'Bitmap Brothers',
                'mesin' => 'The Chaous Engine',
                'perangkat' => 'Arcade'
            ],

            ];
            foreach ($publishers as $pub) {
                Publisher::create([
                    'pengembang' => $pub["pengembang"],
                    'mesin' => $pub["mesin"],
                    'perangkat' => $pub["perangkat"]
                    ]);
                }
    }
}
