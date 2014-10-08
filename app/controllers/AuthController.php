<?php


class AuthController extends BaseController
{
    /**
     * User repository
     *
     */
    protected $user;

    /**
     * User form
     *
     */

    public function __construct()
    {
        
    }
    public function test(){
    }
    /**
     * Show signup form
     * GET /signup
     */
    public function getSignup()
    {
        return View::make('auth.signup');
    }
    
    /**
     * Process signup form
     * POST /signup
     */
    public function postSignup()
    {
    	if ($this->userForm->create(Input::all())) {
    		return Redirect::route('auth.getSignup')
    		->with('message', 'Successfully registered. Please check your email and activate your account.')
    		->with('messageType', "success");
    	}
    
    	return Redirect::route('auth.getSignup')
    	->withInput()
    	->withErrors($this->userForm->errors());
    }

    /**
     * Show login form
     * GET /login
     */
    public function getLogin()
    {
        return View::make('auth.login');
    }
    /**
     * Process login
     * POST /login
     */
    public function postLogin()
    {
    	$params = array(
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        );
        
    	$user = User::where(array('username'=>$params['username'],'password'=>$params['password'])) ->count();
     if ($user >0) {
            // if next is present, redirect to that url
            $next = Input::get('next');
            if ($next) return Redirect::to($next);
            return Redirect::route('home');
        }
        return Redirect::route('auth.getLogin')
            ->with('message', 'Wrong username or password');
    }
    
    /**
     * Process logout
     * GET /logout
     */
    public function getLogout()
    {
    	Auth::logout();
    
    	return Redirect::route('auth.getLogin');
    }
    
}
