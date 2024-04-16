<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        'title' => 'プログラミングの心得',
        'body' => 'エラーは状況を基準に考える',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
        'title' => '人間関係',
        'body' => '自己開示できるようになれば怖くない',
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),
        ]);
    }
}
