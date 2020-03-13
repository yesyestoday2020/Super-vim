<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//
	/* category表结构中未生成时间戳，这里设置为false */
	public $timestamps = false;

	/* 添加白名单属性，也就是支持那些字段是可以修改的 */
	protected $fillable = [
		'name', 'description',
	];
}
