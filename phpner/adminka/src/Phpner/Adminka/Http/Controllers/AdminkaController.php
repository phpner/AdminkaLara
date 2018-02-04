<?php
namespace Phpner\Adminka\Http\Controllers;
use app;
use Phpner\Adminka\Models\User;
use Phpner\Adminka\Models\Rules;

class AdminkaController extends AdminBaseController
{

    public function index()
   {
       $user = new User();

       $ad = User::find(1)->rules;
       dd($ad);
       return view('phpner::views\admin\admin_enter_page');

   }
   public function users()
   {
       $users = User::all();
       return view('phpner::views\admin\users_admin',['users' => $users ]);
   }
}
