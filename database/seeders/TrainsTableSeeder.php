<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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
        $csvData = Helpers::getCsvContent(__DIR__ . '/trains.csv');
        foreach ($csvData as $index => $row) {
            if ($index > 0) {
                $newTrain = new Train();
                $newTrain->company = $row[0];
                $newTrain->departure_station = $row[1];
                $newTrain->arrival_station = $row[2];
                $newTrain->departure_time = $row[3];
                $newTrain->arrival_time = $row[4];
                $newTrain->train_code = $row[5];
                $newTrain->wagons_number = $row[6];
                $newTrain->on_time = $row[7];
                $newTrain->cancelled = $row[8];
                $newTrain->save();
            }
        }
    }
}
