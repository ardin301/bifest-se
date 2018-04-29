<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Semino Logo.exe</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/home')}}">Home</a></li>
{{--      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dashboard 
         <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>--}}
      <li><a href="{{url('/event')}}">Event List</a></li>
      <li><a href="{{url('/about')}}">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>