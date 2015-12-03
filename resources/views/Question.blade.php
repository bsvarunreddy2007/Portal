@extends('master')
@section('title', 'Home')
@section('head')
<script type="text/javascript" src="tinymce.min.js" ></script>
<script type="text/javascript">
        tinyMCE.init({
          selector : "#content1"
});
</script>
@stop
@section('content')
<form name="question" method="post">
      	 Write question's title here:
      	<input type="text" name="question"><br>
      	Enter your question here:<br>
        <textarea id="content1" name="content" cols="50" rows="15" >
        </textarea>
        <input type="submit" value="Post">
        </form>
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