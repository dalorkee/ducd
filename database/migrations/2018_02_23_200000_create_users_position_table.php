<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPositionTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('position', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('pos_name', 90)->nullable();
			$table->string('pos_name_en', 90)->nullable();
		});
	}
	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down() {
		Schema::dropIfExists('position');
	}
}
