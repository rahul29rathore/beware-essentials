<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   $settings = [
			['key' => 'address', 'value' => 'Plot No.166, 3rd floor, Udyog Vihar, Phase-1, Gurugram, Haryana (122016), India'],
			['key' => 'email', 'value' => 'sales@13sqft.com'],
			['key' => 'contact_no', 'value' => '+91 8700471705'],
			['key' => 'facebook', 'value' => 'https://www.facebook.com/'],
			['key' => 'linkedIn', 'value' => 'https://www.linkedin.com/'],
			['key' => 'twitter', 'value' => 'https://twitter.com/'],
	   ];

       DB::table('settings')->insert($settings);
    }
}
