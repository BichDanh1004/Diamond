<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'->name,
            'email'->email,
            'phone_number'->phone_number,
            'address'->address,
            'password'->password,
            'remember_token'->remember_token
        ]);
    }
    
}
