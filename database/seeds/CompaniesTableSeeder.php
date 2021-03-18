<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = \App\Company::where('email', "abdullahnaseer999@gmail.com")->first();
        if(is_null($company))
        {
            \App\Company::create(
                [
                    'name' => "Company pvt",
                    'tagline' => "MY Tagline",
                    'email' => "abdullahnaseer999@gmail.com",
                    'password' => \Illuminate\Support\Facades\Hash::make('secret123'),
                    'phone' => "+923366633352",
                    'address' => 'My Adress',
                    'email_verified_at' => \Carbon\Carbon::now()->toDateTimeString()
                ]
            );
        }
    }
}
