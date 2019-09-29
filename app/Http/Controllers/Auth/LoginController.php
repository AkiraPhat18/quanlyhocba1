<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    }
    public function getLogin() {
    	return view('auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
        //dd($request->email);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember) ||
            Auth::attempt(['name' => $request->email, 'password' => $request->password], $request->remember)
        ) {
            
            return redirect(route('admin.dashboard'));
        }else{
            return back()->with('message', 'Sai tài khoản/mật khẩu');
        }
        // $rules = [
    	// 	'email' =>'required|email',
    	// 	'password' => 'required|min:8'
    	// ];
    	// $messages = [
    	// 	'email.required' => 'Email là trường bắt buộc',
    	// 	'email.email' => 'Email không đúng định dạng',
    	// 	'password.required' => 'Mật khẩu là trường bắt buộc',
    	// 	'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	// ];
    	// $validator = Validator::make($request->all(), $rules, $messages);

    	// if ($validator->fails()) {
    	// 	return redirect()->back()->withErrors($validator)->withInput();
    	// } else {
    	// 	$email = $request->input('email');
    	// 	$password = $request->input('password');

    	// 	if( Auth::attempt(['email' => $email, 'password' =>$password])) {
    	// 		return redirect(route('admin.dashboard'));
    	// 	} else {
    	// 		$errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
    	// 		return redirect()->back()->withInput()->withErrors($errors);
    	// 	}
    	// }
    }
}
