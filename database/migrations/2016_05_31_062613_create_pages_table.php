<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parentid');
			$table->string('alias', 255)->unique('alias')->nullable();
			$table->string('title', 500);
			$table->string('author', 255)->nullable();
			$table->string('robots', 100)->nullable();
			$table->string('tags', 500)->nullable();
			$table->string('meta_description', 500)->nullable();
			$table->string('meta_keywords', 500)->nullable();
			$table->longText('content')->nullable();
			$table->integer('priority');
			$table->boolean('featured');
			$table->boolean('published');
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
        Schema::drop('pages');
    }
}
