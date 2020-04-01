<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->userName = 'Admin';
        $user->email = 'AdminMuyReal@gmail.com';
        $user->password = Hash::make("123123");
        $user->userAdministrador = true;
        $user->save();
        // User::create([
        //     'userName' => 'admin',
        //     'email' => 'AdminMuyReal@gmail.com',
        //     'password' => Hash::make("123123"),
        //     'avatar' => '/img/Foto_Usuario.png']);
    }
}
