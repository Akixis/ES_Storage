<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('types')->insert([
          'industry_id'=>1,
          'title' => 'SIer',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
      DB::table('types')->insert([
          'industry_id'=>1,
          'title' => 'Webアプリ',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
    }
}
