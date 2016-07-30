<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [];
        for($i=0;$i<100;$i++){
        	$temp = [];
        	$temp['username'] = str_random(9);
        	$temp['password'] = Hash::make(str_random(9));
        	$temp['auth'] = rand(0,1);
        	$temp['status'] = rand(0,1);
            $temp['nickName'] = $temp['username'];

        	$tel = '';
        	for($j=0;$j < 11;$j++){
        		$tel .= rand(0,9);
        	}

        	$temp['tel'] = $tel;

        	$data[] = $temp;
        }

        DB::table('users')->insert($data);
    }
}
