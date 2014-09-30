@extends('layouts.master')

@section('title')
@parent
:: Demo Title
@stop

@section('content')
<h1>Hello World!</h1>
<p>This page is created using a master template.</p>
  <p>This is my body content.</p>
    <div class="welcome">
	 <h2>Demo Controller <?php echo $title; ?></h2>
	 <?php  $url=URL::route("content",array('9999'))?>
	 <?php echo "<a href='$url' >Click here</a> "?>
	</div>
@stop
   
   
  
	

