@extends('master')
@section('title', 'Register')
@section('content')
 <h2>Registration</h2>
   <form name="register" method="post">
    @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
            <table style="width:100%">
                <tr><td>First Name:</td>
                <td><input id="fn" type="string" name="fn"></td><td id="nfn"> </td></tr>
                <tr><td>Last Name:</td>
                <td><input id="ln" type="string" name="ln"></td><td id="nln"> </td></tr>
                <tr><td>Username:</td>
                <td><input id="un" type="string" name="un"></td><td id="nun"> </td></tr>
                <tr><td>Password:</td>
                <td><input type="password" id="ps" type="string" name="ps"></td><td id="nps"> </td></tr>
                <tr><td>Mobile Number:</td>
                <td><input id="mn" type="number" name="mn"></td><td id="nmn"> </td></tr>
                <tr><td></td><td><input type="submit" value="Register"></td></tr>
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