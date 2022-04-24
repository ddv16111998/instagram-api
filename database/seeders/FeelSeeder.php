<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeelSeeder extends Seeder
{
    public function run()
    {
        DB::table('feels')->truncate();
        DB::table('feels')->insert([
            [
                'name' => 'hạnh phúc',
                'icon' => 'hanh-phuc.png'
            ],
            [
                'name' => 'có phúc',
                'icon' => 'co-phuc.png'
            ],
            [
                'name' => 'được yêu',
                'icon' => 'duoc-yeu.png'
            ],
            [
                'name' => 'buồn',
                'icon' => 'buon.png'
            ],
            [
                'name' => 'đáng yêu',
                'icon' => 'dang-yeu.png'
            ],
            [
                'name' => 'biết ơn',
                'icon' => 'biet-on.png'
            ],
            [
                'name' => 'hào hứng',
                'icon' => 'hao-hung.png'
            ],
            [
                'name' => 'đang yêu',
                'icon' => 'dang-duoc-yeu.png'
            ],
        ]);
    }
}
