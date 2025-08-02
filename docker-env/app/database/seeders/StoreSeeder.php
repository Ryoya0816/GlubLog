<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stores')->insert([
            [
                'name' => 'グルメ寿司 佐賀店',
                'address' => '佐賀県佐賀市中央1-1-1',
                'tel' => '0952-22-0001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'グルメ寿司 福岡店',
                'address' => '福岡県福岡市博多区駅前2-2-2',
                'tel' => '092-123-4567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'グルメ寿司 東京店',
                'address' => '東京都中央区銀座3-3-3',
                'tel' => '03-3333-3333',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
