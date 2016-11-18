<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('description');
            $table->string('key');
			$table->string('value');
            $table->timestamps();
        });
		
		Schema::table('settings', function (Blueprint $table) {
            //$table->primary('name');
			DB::table('settings')->insert([
				'description' => 'Tiêu đề website',
				'key' => 'title',
				'value' => 'Rao vặt',
			]);
			
			DB::table('settings')->insert([
				'description' => 'Số bài hiển thị trên 1 trang',
				'key' => 'pagination',
				'value' => '15',
			]);
			
			DB::table('settings')->insert([
				'description' => 'Mặc định khi đăng bài (0: chờ duyệt, 1: duyệt)',
				'key' => 'approval',
				'value' => '0',
			]);
			
			DB::table('settings')->insert([
				'description' => 'Thông báo cho website',
				'key' => 'notice',
				'value' => 'Đây là thông báo',
			]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
