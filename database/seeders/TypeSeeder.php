<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Type::create([
          'id'=>1,
          'industry_id'=>1,
          'title' => 'SIer',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
      Type::create([
          'id'=>2,
          'industry_id'=>1,
          'title' => 'Webアプリ',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ]);
    }
}
