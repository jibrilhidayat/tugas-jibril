<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Schema;
Schema::disableForeignKeyConstraints();
ClassRoom::truncate();
schema::enableForeignKeyConstraints();

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => '12 TKJ A',

            ],

            [
                'name' => '12 TKJ B',

            ],


            [
                'name' => '12 TKJ C',

            ],

            [
                'name' => '12 TKJ D',

            ],
        ];

        foreach ($data as $value) {
            ClassRoom::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        //ClassRoom::insert([
           //'name' => '12 TKJ D',
           //'created_at' =>Carbon:: now(),
         //   'updated_at' =>Carbon:: now(),

       // ]);
    }
}
