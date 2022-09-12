<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'title' => 'ssaki', 'parent_id' => '0'],
            ['id' => '2', 'title' => 'ptaki', 'parent_id' => '0'],
            ['id' => '3', 'title' => 'gady', 'parent_id' => '0'],
            ['id' => '4', 'title' => 'owady', 'parent_id' => '0'],
            ['id' => '5', 'title' => 'naczelne', 'parent_id' => '1'],
            ['id' => '6', 'title' => 'gryzonie', 'parent_id' => '1'],
            ['id' => '7', 'title' => 'łuskowce', 'parent_id' => '1'],
            ['id' => '8', 'title' => 'małpiatki', 'parent_id' => '5'],
            ['id' => '9', 'title' => 'małpy właściwe', 'parent_id' => '5'],
            ['id' => '10', 'title' => 'goryl', 'parent_id' => '9'],
            ['id' => '11', 'title' => 'żółwie', 'parent_id' => '3'],
            ['id' => '12', 'title' => 'jaszczurki', 'parent_id' => '3'],
            ['id' => '13', 'title' => 'żółwie lądowe', 'parent_id' => '11'],
            ['id' => '14', 'title' => 'żółw olbrzymi', 'parent_id' => '13']
        ];
        DB::table('categories')->insert($data);
    }
}
