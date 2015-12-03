@extends('master')
@section('title', 'Home')
@section('head')
<script type="text/javascript">
        tinyMCE.init({
          selector : "#content1"
});
</script>
@stop
@section('content')
@foreach ($question1 as $question)
@if($question->qid == $id)
<h2>{{ $question->Question }}</h2>
<h3>{!! $question->Content !!}</h3>
@foreach ($user1 as $user)
@if($user->id == $question->id)
<p>Asked by: {{$user->Username }}</p><br>
@endif
@endforeach
@endif
@endforeach
@foreach ($answer1 as $answer)
@if($answer->qid == $id)
<h3>{!! $answer->Content !!}</h3>
@foreach ($user1 as $user2)
@if($user2->id == $answer->id)
<p>answered by: {{$user2->Username }}
@foreach ($vote2 as $vote)
@if($answer->aid == $vote->aid && $vote->id == Session::get('id')&& $vote->value == -1)
  <a id="vote" href="/Vote/{{ $answer->aid }}/1"> <button>Upvote</button></a>
  <a id="voted" href="#"> <button>Downvoted</button></a>
@elseif($answer->aid == $vote->aid && $vote->id == Session::get('id') && $vote->value == 1)
  <a id="voted" href="#"> <button>Upvoted</button></a>
  <a id="vote" href="/Vote/{{ $answer->aid }}/-1"> <button>Downvote</button></a>
@elseif($answer->aid != $vote->aid && $vote->id != Session::get('id'))
<a id="vote" href="/Vote/{{ $answer->aid }}/1"> <button>Upvote</button></a>
<a id="vote" href="/Vote/{{ $answer->aid }}/-1"> <button>Downvote</button></a>
@endif
@endforeach
<?php $answer->score == 0;?>
@foreach ($vote2 as $vote)
@if($vote->aid == $answer->aid)
<?php $answer->score += $vote->value;?>
@endif
@endforeach
<span>Score: {{ $answer->score }}<span>
@endif
@endforeach
@endif
@endforeach

<form name="answer" method="post">
      	Enter your Answer here:<br>
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