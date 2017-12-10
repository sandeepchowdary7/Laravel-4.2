<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorQualifTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Author_Qualif', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id');
			$table->string('school_name');
			$table->string('specialization');
			$table->string('awards');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Author_Qualif');
	}

}
