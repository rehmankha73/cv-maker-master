<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Admin::where('email', "abdullahnaseer999@gmail.com")->first();
        if(is_null($admin))
        {
            \App\Admin::create(
                [
                    'firstname' => "Muhammad",
                    'sirname' => "Abdullah",
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
