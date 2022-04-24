<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActSeeder extends Seeder
{
    public function run()
    {
        DB::table('acts')->truncate();
        DB::table('acts')->insert([
            [
                'name' => 'Đang chúc mừng...',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 0
            ],
            [
                'name' => 'tình bạn',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 1
            ],
            [
                'name' => 'sinh nhật',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 1
            ],
            [
                'name' => 'ngày đặc biệt',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 1
            ],
            [
                'name' => 'Đang ăn...',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 0
            ],
            [
                'name' => 'ăn sáng',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 2
            ],
            [
                'name' => 'ăn trưa',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 2
            ],
            [
                'name' => 'ăn tối',
                'icon' => 'hanh-phuc.png',
                'parent_id' => 2
            ],
        ]);
    }
}
