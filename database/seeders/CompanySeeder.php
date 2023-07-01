<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
          'id'=>1,
          'type_id'=>1,
          'title' => 'A',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
    }
}
