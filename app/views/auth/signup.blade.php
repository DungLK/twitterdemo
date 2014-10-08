@extends('layouts.master')

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
	<h3>Join Twitter today.</h3>
      {{ Form::open(array('route' => 'auth.postSignup', 'class'=>'form-signin form-register')) }}
	
         {{ Form::field(['name' => 'fullname', 'error' => $errors, 'label' => 'Full name', 'placeholder' => 'Full name', 'parameters' => ['required', 'autofocus']]) }}
         {{ Form::field(['name' => 'email', 'error' => $errors, 'label' => 'Email address', 'placeholder' => 'Enter email', 'parameters' => ['required', 'autofocus']]) }}
         {{ Form::field(['name' => 'password', 'error' => $errors, 'label' => 'Password:', 'placeholder' => 'Password', 'type' => 'password', 'parameters' => ['required']]) }}
         {{ Form::field(['name' => 'username', 'error' => $errors, 'label' => 'Choose your username', 'placeholder' => 'Username', 'parameters' => ['required', 'autofocus']]) }}
         {{ Form::field(['name' => 'remember', 'error' => $errors, 'label' => 'Keep me signed-in on this computer.','type' => 'checkbox']) }}
			
         <p>{{ HTML::submit('Create my account', array('class' => 'btn btn-primary')) }}</p>
      {{ Form::close() }}
      
      <p><a href="{{ route('auth.getLogin') }}" class="text-center new-account">Already have an account? Sign In</a></p>
      
    </div>
    
    </div>
@stop