@extends('layouts.master')


@section('content')
	<div class="row">
    <h3>Wellcome to twitter!</h3>
    
     <?php  $url=URL::route("auth.getLogin") ?>
     		
    <h5><a href="<?php echo URL::route("auth.getLogin");?>">Login</a> or <a href="<?php echo URL::route("auth.getSignup")?>">signup</a></h5>
	</div>

@stop