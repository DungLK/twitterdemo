<?php

class DemoController extends BaseController {

	public function index(){
		return View::make("demo.index") ->with("title","Xin Chao");
	}
    
	public function getContent($id){
		return "Your id $id";
	}
	

}
