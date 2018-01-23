<?php
namespace Phpner\Adminka\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Phpner\Adminka\Http\Controllers\AdminBaseController as AdminBaseController;

class LoginController extends AdminBaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginForm()
    {
        return view('phpner::views\auth\login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
