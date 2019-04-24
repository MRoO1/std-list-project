<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('SignIn');
    }



function checklogin(Request $request)
    {
     $this->$request->validate([
                                'email'   => 'required|email',
                                'password'  => 'required'   ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect()->route('successlogin');
     }
     else
     {
      return view('/home')->with('error', 'Wrong Login Details');
     }

    }

   function successlogin()
    {
     return view('/home');
    }

   /* function logout()
    {
     Auth::logout();
     return redirect()->route('login');/*->with('success'.' User'.' has LogOut successfully...!'*);
    }*/

}
