<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::getCsvContent(__DIR__ . '/trains.csv');
    }

    public static function getCsvContent(string $path)
    {

        $data = [];

        $file = fopen($path, 'r');

        if ($file === false) {
            exit('File non valido');
        }

        while (($row = fgetcsv($file)) !== FALSE) {
            $data[] = $row;
        }
        return $data;
    }
}
