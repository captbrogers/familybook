<?php

use Illuminate\Database\Seeder;

use App\Models\Timezone;

class TimezonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $timezones = [
            [
                'title'          => 'Universal Time Coordinated',
                'name'           => 'UTC',
                'keyname'        => str_slug('UTC'),
                'offset_hours'   => 0,
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Greenwich Mean Time',
                'name'           => 'GMT',
                'keyname'        => str_slug('GMT'),
                'offset_hours'   => 0,
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Hawaii-Aleutian',
                'name'           => 'HST',
                'keyname'        => str_slug('HST'),
                'offset_hours'   => '-10',
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Alaska',
                'name'           => 'AKST',
                'keyname'        => str_slug('AKST'),
                'offset_hours'   => '-9',
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Pacific',
                'name'           => 'PST',
                'keyname'        => str_slug('PST'),
                'offset_hours'   => '-8',
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Mountain',
                'name'           => 'MST',
                'keyname'        => str_slug('MST'),
                'offset_hours'   => '-7',
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Central',
                'name'           => 'CST',
                'keyname'        => str_slug('CST'),
                'offset_hours'   => '-6',
                'offset_minutes' => 0,
            ],
            [
                'title'          => 'Eastern',
                'name'           => 'EST',
                'keyname'        => str_slug('EST'),
                'offset_hours'   => '-5',
                'offset_minutes' => 0,
            ],
        ];

        foreach ($timezones as $timezone) {
            Timezone::create($timezone);
        }
    }
}
