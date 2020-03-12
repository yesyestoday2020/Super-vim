<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
	//
	/**
	 * undocumented function
	 *
	 * @return void
	 */
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	/**
	 * 添加用户编辑个人信息视图
	 *
	 * @return void
	 */
	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 */
	public function update(UserRequest $request, User $user)
	{
		$user->update($request->all());
		return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
	}
}
