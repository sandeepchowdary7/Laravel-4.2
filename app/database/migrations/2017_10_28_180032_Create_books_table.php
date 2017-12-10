<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title')->default('not null');
			$table->string('author_id')->default('not null');
			$table->integer('price');
			$table->string('isbn')->default( 'not null');
			$table->string('language')->default('not null');
			$table->string('year_of_publisher');
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
		Schema::drop('books');
	}
}
