<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

	use VerifiesEmails;

	/**
	 * Where to redirect users after verification.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		/* 控制器动作要登录后才能使用 */
		$this->middleware('auth');

		/* 签名认证 */
		$this->middleware('signed')->only('verify');

		/* 邮箱验证访问频率，一分钟访问6次 */
		$this->middleware('throttle:6,1')->only('verify', 'resend');
	}
}
