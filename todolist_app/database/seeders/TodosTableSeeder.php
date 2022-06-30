<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $aTodoInfo = array(
            array(
                "title" => "プライベート",
                "comment" => "6/1 12時から田中とランチ"
            ),
            array(
                "title" => "仕事",
                "comment" => "6/7 15時からA会議室で会議"
            ),
            array(
                "title" => "旅行",
                "comment" => "8/8から3日間北海道へ旅行"
            ),
        );

        foreach ($aTodoInfo as $key => $value ) {
            DB::table('todos')->insert([
                'title' => $value[ "title" ],
                'comment' => $value[ "comment" ],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
