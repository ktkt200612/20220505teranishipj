<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $param = [
            'content' => 'ダミーデータ1',
            'created_at' => '2002-05-11 13:17:44'
        ];
        DB::table('todos')->insert($param);
        $param = [
            'content' => 'ダミー2',
            'created_at' => '2012-05-11 13:17:44'
        ];
        DB::table('todos')->insert($param);
    }
}
