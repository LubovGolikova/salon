<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Salon</title>
 <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="{{asset('styles/style.css')}}">

</head>
<body>
<header id="headerId" >
<nav class="navbar navbar-expand-lg navbar-light bg-dark-blue">
    <div class="container">
      @csrf
      <div  class="logo"><a href="/">
        <img src="{{asset('assets/images/hair-salon-white.png')}}" alt=""  class="d-block mx-auto  "/>
         </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto ml-auto ">
             <li class="nav-item active ">
                <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">О нас</a>
            </li>
            <li class="nav-item ">
                 <a class="nav-link" href="#">Контакты </a>
             </li>

            <li class="nav-item ">
                <a class="nav-link" href="#">+380932677881 </a>
            </li>

        </ul>

        <div class="social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>

    </div>

</nav>
@yield('content')
</header>