<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('industries')->insert([
          'user_id'=>1,
          'title' => 'IT業界',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
      DB::table('industries')->insert([
          'user_id'=>1,
          'title' => 'メーカー業界',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
    }
}
