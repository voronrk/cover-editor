<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Background;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ar = [
            'bg/01.tif',
            'bg/02.tif',
            'bg/03.tif',
            'bg/04.tif',
            'bg/05.tif',
        ];
        foreach($ar as $item) {
            Background::create(['bg' => $item]);
        };
    }
}
