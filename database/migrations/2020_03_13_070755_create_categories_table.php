<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function (Blueprint $table) {
			$table->increments('id');
			/* 添加普通索引 */
			$table->string('name')->index()->comment('名称');
			/* 描述可为空 */
			$table->text('description')->nullable()->comment('描述');
			/* post_count  整数，默认值为零*/
			$table->integer('post_count')->default(0)->comment('帖子数');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('categories');
	}
}
