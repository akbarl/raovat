<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		//$title = ['name' => 'title','value' => 'Rao vặt'];
		//$pagination = ['name' => 'pagination','value' => '15'];
		//$approval = ['name' => 'approval','value' => '0'];
		//$notice = ['name' => 'notice','value' => 'Đây là thông báo'];
		
		DB::table('settings')->insert([
            'name' => 'title',
            'email' => 'Rao vặt',
        ]);
		
		DB::table('settings')->insert([
            'name' => 'pagination',
            'email' => '15',
        ]);
		
		DB::table('settings')->insert([
            'name' => 'approval',
            'email' => '0',
        ]);
		
		DB::table('settings')->insert([
            'name' => 'notice',
            'email' => 'Đây là thông báo',
        ]);
    }
}
