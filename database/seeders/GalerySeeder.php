<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GalerySeeder extends Seeder
{
    const DATA = [
        [
            'title' => 'Gala Dinner PTPN BOM Prambanan 2023',
            'amount' => 16
        ],
        [
            'title' => 'Kemnaker UGM',
            'amount' => 11
        ],
        [
            'title' => 'Kemnaker UNY Kuliah Umum Peluang dan Tantangan Dunia Kerja di Era 5.0 2023',
            'amount' => 14
        ],
        [
            'title' => 'HUT Kementrian Ketenagakerjaan Ke-76 Tahun 13 Agustus 2023',
            'amount' => 11
        ],
        [
            'title' => 'Workshop PTPN Group 2023',
            'amount' => 11
        ],
        [
            'title' => 'SDM Gathering PTPN 16 Februari 2023',
            'amount' => 11
        ],
        [
            'title' => 'Gala Dinner LPP 30 January 2023',
            'amount' => 14
        ],
        [
            'title' => 'Sarasehan Teknis Impressive Comunication _ Outing PT.PGAS SOLUTION 7 - 11 Agustus 2023',
            'amount' => 12
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::DATA as $value) {
            Galery::insert([
                'name' => $value['title'],
                'slug' => Str::slug($value['title']),
                'image' => $this->getImage($value['amount'], Str::slug($value['title'])),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    private function getImage($value, $slug)
    {
        $result = [];
        for ($i = 1; $i <= $value; $i++) {
            $result[$i] = $slug . '-' . $i . '.jpg';
        }
        return json_encode(array_values($result));
    }
}
