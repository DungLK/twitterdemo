@extends('layouts.master')
 
@section('styles')
 h3{
  font-size: 38px;
line-height: 44px;
margin-bottom: 30px;
text-shadow: none;
}
@stop
@section('navglobal')
  @include('partials/header')
@stop
@section('content')
	<div class="row">
	<div class="col-md-8">
	     <h1>Wellcome to twitter!</h1>
	     <p>Connect with your friends - and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
	     		
	    </div>
	
	<div class="col-md-4">
	<h5><a href="<?php echo URL::route("auth.getLogin");?>">Login</a> or <a href="<?php echo URL::route("auth.getSignup")?>">signup</a></h5>
		
	</div>
    </div>

@stop