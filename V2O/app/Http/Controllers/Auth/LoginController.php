<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:volorg')->except('logout');
    }
    
    public function guard()
    {
     return Auth::guard('volorg');
   }
    
    /*public function showVolorgLoginForm()
    {
        return view('auth.login', ['url' => 'volorg']);
    }

    public function volorgLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('volorg')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) 
        {

            return redirect()->intended('/volorg');
        }
        return back()->withInput($request->only('email', 'remember'));
    }*/
}
