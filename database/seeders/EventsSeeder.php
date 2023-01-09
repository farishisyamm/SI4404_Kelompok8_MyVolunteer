<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\EventDetail;
use App\Models\EventResource;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events= [
            ['user_id' => '6', 'event_name' => 'Acara Penggalangan Dana Anak Yatim', 'event_location' => 'Jakarta', 'longitude' => '106.865416', 'latitude' => '-6.175392', 'start_date' => '2022-03-01 10:00:00', 'end_date' => '2022-03-01 17:00:00', 'resource_need' => '50', 'event_description' => 'Kami mengadakan acara penggalangan dana untuk anak-anak yatim di Jakarta. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'N', 'reward' => 'Hadiah menarik bagi relawan terbaik'],
            ['user_id' => '6', 'event_name' => 'Pembersihan Pantai', 'event_location' => 'Jakarta', 'longitude' => '115.216667', 'latitude' => '-8.650000', 'start_date' => '2022-05-15 08:00:00', 'end_date' => '2022-05-15 15:00:00', 'resource_need' => '100', 'event_description' => 'Kami mengadakan acara pembersihan pantai di Bali untuk menjaga kelestarian alam. Kami membutuhkan relawan yang bisa membantu kami membersihkan pantai tersebut', 'event_status' => 'N', 'reward' => 'Sertifikat penghargaan dan makan siang gratis'],
            ['user_id' => '7', 'event_name' => 'Pekan Olahraga Anak', 'event_location' => 'Surabaya', 'longitude' => '112.750000', 'latitude' => '-7.333333', 'start_date' => '2022-07-10 09:00:00', 'end_date' => '2022-07-10 16:00:00', 'resource_need' => '75', 'event_description' => 'Kami mengadakan pekan olahraga anak di Surabaya untuk mengenalkan olahraga kepada anak-anak. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'N', 'reward' => 'Sertifikat penghargaan dan hadiah menarik bagi relawan terbaik'],

            ['user_id' => '7', 'event_name' => 'Baksos Anak Yatim', 'event_location' => 'Bandung', 'longitude' => '107.624403', 'latitude' => '-6.939642', 'start_date' => '2022-09-05 08:00:00', 'end_date' => '2022-09-05 14:00:00', 'resource_need' => '50', 'event_description' => 'Kami mengadakan baksos anak yatim di Bandung untuk membantu anak-anak yatim di kota tersebut. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'Y', 'reward' => 'Sertifikat penghargaan dan makan siang gratis'],
            ['user_id' => '8', 'event_name' => 'Pembersihan Sungai', 'event_location' => 'Yogyakarta', 'longitude' => '110.366547', 'latitude' => '-7.807380', 'start_date' => '2022-11-20 09:00:00', 'end_date' => '2022-11-20 15:00:00', 'resource_need' => '75', 'event_description' => 'Kami mengadakan acara pembersihan sungai di Yogyakarta untuk menjaga kelestarian alam. Kami membutuhkan relawan yang bisa membantu kami membersihkan sungai tersebut.', 'event_status' => 'Y', 'reward' => 'Sertifikat penghargaan dan hadiah menarik'],
            ['user_id' => '8', 'event_name' => 'Acara Penggalangan Dana Pendidikan', 'event_location' => 'Jakarta', 'longitude' => '106.865416', 'latitude' => '-6.175392', 'start_date' => '2023-01-01 10:00:00', 'end_date' => '2023-01-01 17:00:00', 'resource_need' => '50', 'event_description' => 'Kami mengadakan acara penggalangan dana untuk pendidikan di Jakarta. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'Y', 'reward' => 'Hadiah menarik bagi relawan terbaik'],
            
            ['user_id' => '9', 'event_name' => 'Pembuatan Taman Kota', 'event_location' => 'Bali', 'longitude' => '115.216667', 'latitude' => '-8.650000', 'start_date' => '2023-01-09 08:00:00', 'end_date' => '2023-01-12 15:00:00', 'resource_need' => '100', 'event_description' => ' Kami mengadakan acara pembuatan taman kota di Bali untuk menambah ruang hijau di kota tersebut. Kami membutuhkan relawan yang bisa membantu kami membuat taman tersebut.', 'event_status' => 'S', 'reward' => 'Sertifikat penghargaan dan makan siang gratis'],
            ['user_id' => '9', 'event_name' => 'Festival Seni Budaya', 'event_location' => 'Surabaya', 'longitude' => '112.750000', 'latitude' => '-7.333333', 'start_date' => '2023-01-09 09:00:00', 'end_date' => '2023-01-12 16:00:00', 'resource_need' => '75', 'event_description' => 'Kami mengadakan festival seni budaya di Surabaya untuk mengenalkan kebudayaan Indonesia kepada masyarakat. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'S', 'reward' => 'Sertifikat penghargaan dan hadiah menarik bagi relawan terbaik'],
            ['user_id' => '10', 'event_name' => 'Baksos Pendidikan', 'event_location' => 'Bandung', 'longitude' => '107.624403', 'latitude' => '-6.939642', 'start_date' => '2023-01-09 08:00:00', 'end_date' => '2023-01-12 14:00:00', 'resource_need' => '50', 'event_description' => 'Kami mengadakan baksos pendidikan di Bandung untuk membantu anak-anak yang kurang mampu untuk mendapatkan pendidikan yang berkualitas. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'S', 'reward' => 'Sertifikat penghargaan dan makan siang gratis'],
            ['user_id' => '10', 'event_name' => 'Pembuatan Jalan Sepeda', 'event_location' => 'Yogyakarta', 'longitude' => '110.366547', 'latitude' => '-7.807380', 'start_date' => '2023-01-09 09:00:00', 'end_date' => '2023-01-12 15:00:00', 'resource_need' => '75', 'event_description' => 'Kami mengadakan baksos pendidikan di Bandung untuk membantu anak-anak yang kurang mampu untuk mendapatkan pendidikan yang berkualitas. Kami membutuhkan relawan yang bisa membantu kami mengatur acara tersebut.', 'event_status' => 'S', 'reward' => 'Sertifikat penghargaan'],
        ];

        $eventResources= [
            ['event_id' => '1', 'user_id' => '1', 'apply_date' => '2022-03-01 10:00:00', 'er_status' => 'D'],
            ['event_id' => '2', 'user_id' => '2', 'apply_date' => '2022-05-15 08:00:00', 'er_status' => 'D'],
            ['event_id' => '2', 'user_id' => '3', 'apply_date' => '2022-07-10 09:00:00', 'er_status' => 'D'],

            ['event_id' => '3', 'user_id' => '4', 'apply_date' => '2022-09-05 08:00:00', 'er_status' => 'A'],
            ['event_id' => '3', 'user_id' => '5', 'apply_date' => '2022-11-20 09:00:00', 'er_status' => 'A'],
            ['event_id' => '3', 'user_id' => '1', 'apply_date' => '2023-01-01 10:00:00', 'er_status' => 'A'],
            
            ['event_id' => '4', 'user_id' => '2', 'apply_date' => '2023-01-09 08:00:00', 'er_status' => 'W'],
            ['event_id' => '4', 'user_id' => '3', 'apply_date' => '2023-01-09 09:00:00', 'er_status' => 'W'],
            ['event_id' => '4', 'user_id' => '4', 'apply_date' => '2023-01-09 08:00:00', 'er_status' => 'W'],
            ['event_id' => '4', 'user_id' => '5', 'apply_date' => '2023-01-09 09:00:00', 'er_status' => 'W'],
        ];
        

        foreach ($events as $event) {
            Event::insert([
                'user_id' => $event['user_id'],
                'event_name' => $event['event_name'],
                'event_location' => $event['event_location'],
                'longitude' => $event['longitude'],
                'latitude' => $event['latitude'],
                'start_date' => $event['start_date'],
                'end_date' => $event['end_date'],
                'resource_need' => $event['resource_need'],
                'event_description' => $event['event_description'],
                'event_status' => $event['event_status'],
                'reward' => $event['reward'],
            ]);
    }
        foreach ($eventResources as $eventResource) {
            EventResource::insert([
                'event_id' => $eventResource['event_id'],
                'user_id' => $eventResource['user_id'],
                'apply_date' => $eventResource['apply_date'],
                'er_status' => $eventResource['er_status'],
            ]);
}
    }
}
