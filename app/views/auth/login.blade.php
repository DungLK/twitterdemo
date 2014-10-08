@extends('layouts.master')
@section('title')
Login to Twitter
@stop
@section('content')
    @if( $errors->has() )
		<p>We encountered the following errors:</p>
		<ul>
			@foreach($errors->all() as $message)
				<li>{{ $message }}</li>
			@endforeach
		</ul>
	@endif
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Sign in to Twitter</h3>
			 	</div>
			  	<div class="panel-body">
			    	{{ Form::open(array('route' => 'auth.postLogin', 'class'=>'form-signin')) }}
                    <fieldset>
			    	  
			    	     {{ Form::field(['name' => 'username', 'error' => $errors, 'no_label' => true, 'placeholder' => 'Username', 'parameters' => ['required', 'autofocus']]) }}
			    		 {{ Form::field(['name' => 'password', 'error' => $errors, 'no_label' => true, 'placeholder' => 'Password', 'type' => 'password', 'parameters' => ['required']]) }}
			
			    	     {{ Form::field(['name' => 'remember', 'error' => $errors, 'label' => 'Remember Me','type' => 'checkbox']) }}
			
			            <p>{{ HTML::submit('Sign in', array('class' => 'btn btn-success btn-block')) }}</p>
			            
			    		<p class="text-center" style="margin-top:10px;">OR</p>
			    		<p class="text-center"><a href="<?php echo URL::route("auth.getSignup")?>">Register for an account?</a></p>
			    	</fieldset>
			      	{{ Form::close() }}
			    </div>
			</div>
		</div>
	</div>
@stop
