<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $location =array('Admin','Editor','User');
        for ($i = 0; $i <= 2; $i++ )
        {
            DB::table('roles')->insert([
                'id' => $i+1,
                'name' => $location[$i],
            ]);
        }
        DB::table('admins')->insert([
            'name'=>'TienMTA',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'level'=>1,

        ]);
        DB::table('admins')->insert([
            'name'=>'users',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('12345678'),
            'level'=>2,


        ]);
    }
}
