<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;

class User extends Authenticatable implements MustVerifyEmailContract
{
	/* 需通知，必须邮箱验证 */
	use Notifiable, MustVerifyEmailTrait;

	/**
	 * The attributes that are mass assignable.
	 * 在 fillable
	 * 属性中的字段是可修改的，如果修改的字段并未在这里列出，即使修改了也不会被写入到数据库中
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'introduction', 'avatar',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}
