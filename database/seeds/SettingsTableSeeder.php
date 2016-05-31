<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run() {
		
		DB::table('settings')->insert([
        	[
	            'id' => 1,
	            'param' => 'sitename',
	            'value' => 'Laravix - Laravel Skeleton'
        	],[
	            'id' => 2,
	            'param' => 'credits',
	            'value' => 'Laravix'
        	],[
	            'id' => 3,
	            'param' => 'email',
	            'value' => 'office@appflow.eu'
        	]
        ]);
		
    }
}
