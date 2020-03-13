<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedCategoriesData extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		/* 往分类表中插入数据 */
		$categories = [
			[
				'name' => '分享',
				'description' => '分享创造价值',
			],
			[
				'name' => '教程',
				'description' => '开发技巧,扩展包推介',
			],
			[
				'name' => '问答',
				'description' => '请保持友善,互帮互助',
			],
			[
				'name' => '公告',
				'description' => '站点公告',
			],
		];

		DB::table('categories')->insert($categories);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/* 回滚迁移清楚分类表中的数据 */
		DB::table('categories')->truncate();
	}
}
