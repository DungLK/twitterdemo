@extends('layouts.master')
@section('title')
Login to Twitter
@stop
@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Sign in to Twitter</h3>
			 	</div>
			  	<div class="panel-body">
			    	{{ Form::open(array('route' => 'auth.postLogin', 'class'=>'form-signin')) }}
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Phone, email or username" name="email" type="text" required="">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-success btn-block" type="submit" value="Login">
			    		<p class="text-center" style="margin-top:10px;">OR</p>
			    		<p class="text-center"><a href="<?php echo URL::route("auth.getSignup")?>">Register for an account?</a></p>
			    	</fieldset>
			      	{{ Form::close() }}
			    </div>
			</div>
		</div>
	</div>
@stop
