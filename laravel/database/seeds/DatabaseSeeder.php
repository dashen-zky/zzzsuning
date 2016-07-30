<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

<<<<<<< HEAD
        // $this->call(UsersSeeder::class);
        $this->call(ArticlesSeeder::class);
=======
<<<<<<< HEAD
        // $this->call(UserTableSeeder::class);
=======
        // $this->call(UsersSeeder::class);
        $this->call(ArticlesSeeder::class);
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974

        Model::reguard();
    }
}
