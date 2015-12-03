<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@yield('title')</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{ URL::asset('default.css') }}"/>
<script src="{{ URL::asset('tinymce.min.js') }}" ></script>
 @yield('head')
</head>
<body>
<div id="outer">
  <div id="header">
    <h1><a href="#">Reddy Book</a></h1>
    <h2>Get Booked By Reddy</h2>
  </div>
  <div id="menu">
    <ul>
      <li class="first"><a href="#" accesskey="1">Home</a></li>
      <li><a href="/Login" accesskey="2" id="find">Login</a></li>
      <li><a href="/Register" accesskey="3" id="find1"><?php if (Session::has('User')) {echo Session::get('User');} else{echo "Register";} ?></a></li>
      <li><a href="#" accesskey="4">About Us</a></li>
      <li><a href="#" accesskey="5">Contact Us</a></li>
    </ul>
  </div>
  <div id="content">
    <div id="tertiaryContent">
      <h3>Create your Account Today</h3>
      <p>Meet and share your Ideas with thousands of our users</p>
      <div class="xbg"></div>
    </div>
    <div id="primaryContentContainer">
      <div id="primaryContent">
         @yield('content')
        </div>
      </div>
        
    <div id="secondaryContent">
      @yield('content1')
      <div class="xbg"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="footer">
  </div>
</div>
</body>
</html>
@yield('content2')
