<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sheets')->insert([
            'id'=>1,
          'company_id'=>3,
          'category_id'=>1,
          'favo'=>false,
          'title' => '例',
          'text' => 'てすてす',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
    }
}
