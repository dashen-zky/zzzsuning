<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=0;$i<100;$i++){
        	$temp = [];
        	$temp['title'] = str_random(9);
        	$temp['intro'] = str_random(15);
        	$temp['tid'] = rand(0,10);
        	$temp['status'] = rand(0,1);
        	$temp['created_at'] = date("Y-m-d H:i:s");
        	$temp['updated_at'] = date("Y-m-d H:i:s");
            $temp['content'] = str_random(100);

        	$data[] = $temp;
        }

        DB::table('articles')->insert($data);
    }
}
