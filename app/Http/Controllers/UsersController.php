<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;
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
	 * 头像处理部分
	 *
	 * @return void
	 */
	public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
	{
		$data = $request->all();

		if ($request->avatar) {
			$result = $uploader->save($request->avatar, 'avatars', $user->id);
			if ($result) {
				$data['avatar'] = $result['path'];
			}
		}

		$user->update($data);
		return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
	}
}
