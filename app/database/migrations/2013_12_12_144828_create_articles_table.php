<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->string('title');
			$table->string('slug');
			$table->text('excerpt');
			$table->text('body');
			$table->integer('category_id')->references('id')->on('categories');
			$table->integer('order');
			$table->softDeletes();
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
		Schema::drop('articles');
	}

}
