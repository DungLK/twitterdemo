<?php namespace LaraTwitter\Repo;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
				'LaraTwitter\Repo\User\UserRepository',
				'LaraTwitter\Repo\User\EloquentUserRepository'
		);
	}

}