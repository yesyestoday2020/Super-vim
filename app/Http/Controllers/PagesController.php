<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//
	/**
	 * undocumented function
	 *
	 * @return void
	 */
	public function root()
	{
		/* 测试用户是否已经通过邮箱验证 */
		/* dd(\Auth::user()->hasVerifiedEmail()); */

		return view('page.root');
	}

	/* session()->flash('success', 'This is a success alert—check it out!'); */
	/* session()->flash('danger', 'This is a danger alert—check it out!'); */
	/* session()->flash('warning', 'This is a warning alert—check it out!'); */
	/* session()->flash('info', 'This is a info alert—check it out!'); */
}
