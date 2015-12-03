@extends('master')
@section('title', 'Home')
@section('content')
<h2 >Welcome <span><?php if (Session::has('User')) {echo Session::get('User');} ?></span></h2>
@stop
@section('content1')
<h3><a href="/Question">Create a Question</a></h3>
      <p>Get your questions answered by other members.</p>
      <h3><a href="/List">View All Questions</a></h3>
      <p>Answer the questions posted by others.</p>
@stop
@section('content2')
<?php
if (Session::has('User')){
		echo "<script type='text/javascript'>";
		echo "document.getElementById('find').innerHTML = 'Logout'";
		echo "</script>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('find').setAttribute('href','/Logout')";
		echo "</script>";
		echo "<script type='text/javascript'>";
		echo "document.getElementById('find1').setAttribute('href','/Userhome')";
		echo "</script>";
	}
else return redirect("/Login");
?>
@stop