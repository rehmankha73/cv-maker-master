<?php

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
        $user = \App\User::where('email', "abdullahnaseer999@gmail.com")->first();
        if(is_null($user))
        {
            \App\User::create(
                [
                    'first_name' => "Muhammad",
                    'last_name' => "Abdullah",
                    'email' => "abdullahnaseer999@gmail.com",
                    'password' => \Illuminate\Support\Facades\Hash::make('secret123'),
                    'dob' => \Carbon\Carbon::now()->toDateString(),
                    'gender' => 'male',
                    'email_verified_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
            );
        }
    }
}
