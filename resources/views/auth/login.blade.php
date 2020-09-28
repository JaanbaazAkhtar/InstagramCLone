<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container-fluid justify-content-center">
            <div class = "row " style="align-items:center; margin-top: 5%">


                <div class="col-3"></div>

                <div class="col-3 d-flex">

                    <div class="bgi" >



                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 300px; height:400px">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="Instaclone/carousel1.jpg" class="d-block" alt="..." width="205px" height="360px">
                              </div>
                              <div class="carousel-item">
                                <img src="Instaclone/carousel2.jpg" class="d-block" alt="..." width="205px" height="360px">
                              </div>
                              <div class="carousel-item">
                                <img src="Instaclone/carousel3.jpg" class="d-block" alt="..." width="205px" height="360px">
                              </div>
                            </div>
                          </div>
                    </div>
                    
                </div>
                <div class="col-4">
                    <div class="card justiy-content-center m-3" style="width: 85%; border-radius:0px">
                        <div  class="justify-content-center" style="margin:11%; align-items:center">


                            <div class="d-flex" style="justify-content:center">
                                <img  src="Instaclone/insta_title.png" width ="60%" height="3%">
                            </div>

                            <div  style=" padding-top:30px; padding-left:20px; padding-right:10px; padding-bottom:5px">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        
                                            <input id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" placeholder="Phone number, username, or email" value="{{ old('text') }}" required autocomplete="email" autofocus>
            
                                            @error('text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>
            
                                    <div class="form-group row">
                                      
                                        
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>
            
                                    <div class="form-group row mb-0 d-flex justify-content-center" >
                                            <button type="submit" class="btn btn-primary" style="width: 100%; height:36px">
                                                {{ __('Log In') }}
                                            </button>
                                    </div>
                                </form>
                                <div class="d-flex" style="margin-top: 20px; margin-left:-10px">
                                    <div >
                                        <img src="Instaclone/line.png" >
                                    </div>

                                   <div style="margin-left: 6%; margin-right:6%">OR</div>
                                    
                                    <div >
                                        <img src="Instaclone/line.png">
                                    </div>
                                </div>

                                <div class="justify-content-center d-flex" style="margin-top: 7%">
                                    <a href="https://www.facebook.com/" style="color:#00376b;">
                                        <img src="Instaclone/fb.png" width="25px" height="25px">
                                        <b>Log in with Facebook</b>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center" style="margin-top: 6%; margin-bottom:-8%">Forgot password?</div>
                                
                            </div>
                        </div>
                        
                    </div>

                    <div class="card m-3 " style="align-items:center; height: 10%; width: 85%; border-radius:0px">
                        <div class="d-flex justify-content-center" style="padding: 5%">
                            Don't have an account?
                            <a href="register"><b>Sign Up</b></a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">Get the app.</div>
                    <div class="d-flex justify-content-center" style="margin-top: 3%">
                        <img src="Instaclone/appstore.png" alt="" widht="50px" height="40px" style="margin-right: 5px">
                        <img src="Instaclone/googleplay.png" alt=""  widht="50px" height="40px" style="margin-left: 5px">
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </div>

        <div class="container bottom-text" style="margin-top:5%; margin-bottom: 2%">
            <div class="d-flex" style="align-items:center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HELP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PRESS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PROVACY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TERMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOCATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TOP ACCOUNTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HASHTAGS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LANGUAGE</a>
                    </li>
                </ul>

                <div style="margin-left:20%; color:grey">INSTAGRAM FROM FACEBOOK</div>
            </div>
        </div>
    </div>
</body>
</html>
