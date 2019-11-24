<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '24SLIDES') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('bootstrap/font-awesome/css/font-awesome.min.css') }}">

    <!-- Styles -->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/login.css')}}">
    <!-- Bootstrap 4 -->
   
    <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

        <link rel="icon" href="{{ asset('resources/image/icon.ico') }}" type="image/png" sizes="32x32">
          <style type="text/css">
            body{
          background: url(resources/image/bk.png) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        }
        </style></head>
<body>
    <div id="app">
        
   
<div class="container" id="container">

    <div class="form-container sign-up-container">

        <form action="#">
            <h1 style="color: #1abc9c;">Create Account</h1>
            <div class="social-container">
            </div>
            <span style="margin-bottom: 11.5%;">or registration in the admin section</span>
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="fa fa-pencil-square-o"></i>
              </div>
                <input type="text" placeholder="Name" />
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="fa fa-envelope-o"></i>
              </div>
                <input type="email" placeholder="Email" />
            </div>
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="fa fa-unlock-alt"></i>
              </div>
                <input type="password" placeholder="Password" style="margin-bottom: 10%;"/>
            </div>
                       
           
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">

           <form method="POST" action="{{ route('login') }}">
                        @csrf
             <img src="{{ asset('resources/image/logo.png') }}" style="width: 200px;"  class="rounded mx-auto d-block">
             <div class="social-container">
                <!-- <i class="fa fa-free-code-camp "></i> -->
            </div>
            <h1 style="color: #0d4268;">Sign in</h1>
            <span>for enter the application </span>

            <div class="input-group">
              <div class="input-group-prepend">
                <i class="fa fa-user"></i>
              </div>
               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="email" autofocus>
            </div>
             <div class="input-group">
              <div class="input-group-prepend">
                <i class="fa fa-unlock-alt"></i>
              </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">
            </div>
          
            
            <a href="#" id="hi">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                
                <button class="ghost" id="signUp" type="submit" >Sign Up</button>
            </div>
        </div>
    </div>
   

</div>

    </div>
    <div class="layer">
           <i class="fa fa-remove" id="remove"></i>
        sadasd
   
    </div>
 <script type="text/javascript">
            const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
        </script>
        <script type="text/javascript">
            $("#hi").click(function(){ 
  $(".layer").addClass("clicked");
});

$("#remove").click(function(){
  $(".layer").removeClass("clicked");
})
        </script>
</body>
</html>

