@extends('master')
@section('title', 'Login')
@section('content')
 <h2>Login</h2>
   <form name="login"  method="post">
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
            <table style="width:100%">
                <tr><td>Username:</td>
                <td><input id="un" type="string" name="un"></td><td id="nfn"></td></tr>
                <tr><td>Password:</td>
                <td><input type="password" id="password" type="string" name="password"></td><td id="nps"></td></tr>
                <tr><td></td><td><input type="submit" value="Login"></td></tr>
            </table>
        </form>
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
?>
@stop