<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Bagas Aditya';
        $admin->email = 'baagas0@gmail.com';
        $admin->password = bcrypt('123456');
        $admin->created_at = now();
        $admin->save();
    }
}
