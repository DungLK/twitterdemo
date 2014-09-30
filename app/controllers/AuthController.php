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

    /**
     * Show signup form
     * GET /signup
     */
    public function getSignup()
    {
        return View::make('auth.signup');
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
    			'email' => Input::get('email'),
    			'password' => Input::get('password'),
    			'active' => 1
    	);
    
    	return var_dump($params);
    	
    	return Redirect::route('home');
    
    	return Redirect::route('auth.getLogin')
    	->with('message', 'Wrong username or password');
    }

}
