<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class DemoController extends BaseController {
	public function index() {
		
		$data = User::find ( 4 );
		$data->delete ();
	
		return $data;
	}
	public function getContent($id) {
		return "Your id $id";
	}
	
}
