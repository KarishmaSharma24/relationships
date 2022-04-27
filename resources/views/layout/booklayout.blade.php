<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
         nav{
            background: skyblue;
            color: #ffff;
        }
    </style>
</head>
<body>
    @yield('header')
    @section('navbar')
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/author">Author</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/book">Book</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/userlogin">User</a>
                      </li>
                      <li class="nav-item" class="text-right">
                        <a class="nav-link" >
                        @if(Auth::check())
                          {{ Auth::user()->email }} 
                        @endif
                      </a>
                      </li>
                      <li class="nav-item">
                        @if(Auth::check())
                        <a class="nav-link" href="/logout">
                          {{ 'logout' }} 
                      </a>
                      @else
                      <a class="nav-link" href="/userlogin">
                        {{ 'login' }} 
                    </a>
                      @endif
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </nav>
        </div>    
        </div>
          <div class="row m-3">
         
        </div>
          
    </div>   
    @show
   <div class="container">
    @yield('heading')
    @yield('book-view')
    @yield('auth-view')
    @yield('userView')
    @yield('registerView')
    @yield('Form')
    @yield('button')
    @yield('footerlinks')
   </div>
</body>
</html>