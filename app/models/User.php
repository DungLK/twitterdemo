<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class User extends Eloquent implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The fields who are mass assignable
	 *
	 * @var string
	 */
	protected $fillable = array (
			'username',
			'password',
			'first_name',
			'last_name',
			'email' 
	);
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array (
			'password',
			'remember_token' 
	);
	public function getUsers() {
		$users = User::all ();
		return $users;
	}
	
}
