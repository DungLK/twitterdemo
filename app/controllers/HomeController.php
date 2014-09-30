<?php
class HomeController extends BaseController {
	protected $user;
	public function __construct() {
	}
	
	/**
	 * Show home page
	 * GET /
	 */
	public function getIndex() {
		return View::make ( 'home.index');
	}
}
