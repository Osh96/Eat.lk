<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat lk</title>
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap"
            rel="stylesheet">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    
        <!--Font Awesome -->
        <script src="https://kit.fontawesome.com/5c70355528.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('css/default.css') }}">
    <script src="{{asset('js/main.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
</head>

<body>

    <section id="nav">
        <div class="container-fluid">

            <nav class=" navbar navbar-expand-lg navbar-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/restaurant-view">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" style="color: #F0A500;">Eat.lk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" @auth  href="{{url('/showcart',Auth::user()->id)}}">Cart</a>@endauth @guest <a class="nav-link" style="color: #F0A500;">Cart</a> @endguest
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #F0A500;" href="/contactus-view">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark fas fa-user-circle"
                                    style="color: #F0A500;"></i></button>
                                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    @if (Route::has('login'))
                                        @auth
                                        <li><a class="dropdown-item" href="{{ url('/dashboard') }}" >Dashboard</a></li>
                                        @else
                                            <li><a  class="dropdown-item" href="{{ route('login') }}" >Log in</a></li>
                    
                                            @if (Route::has('register'))
                                                <li><a  class="dropdown-item" href="{{ route('register') }}" >Register</a></li>
                                            @endif
                                        @endauth
                                @endif
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Sort section -->
    {{-- <section id="sort">
        

        <div class="restaurant-list-dropdowns">
            <h1>Price</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">I'm on a budget</a></li>
                <li><a class="dropdown-item" href="#">Lets spend a little more</a></li>
                <li><a class="dropdown-item" href="#">Good food cost big money</a></li>
            </ul>
        </div>

        <div class="restaurant-list-dropdowns">
            <h1>Location</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Near me</a></li>
                <li><a class="dropdown-item" href="#">Within Colombo</a></li>
                <li><a class="dropdown-item" href="#">Around colombo</a></li>
            </ul>
        </div>

        <div class="restaurant-list-dropdowns">
            <h1>Cuisine</h1>
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                All
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Chinese</a></li>
                <li><a class="dropdown-item" href="#">Pasta</a></li>
                <li><a class="dropdown-item" href="#">Pizza</a></li>
                <li><a class="dropdown-item" href="#">Desserts</a></li>
                <li><a class="dropdown-item" href="#">Rice and Curry</a></li>
            </ul>
        </div>

        
    </section>

    {{-- <div class="sortSearchButton">
        <button type="button" class="btn btn-success btn-lg">Search</button>
      </div> --}} 

      <div class="container">
        <form style="padding-top: 5%" class="d-flex" action="{{url('/searchRestaurant')}}" method="get" role="search"> 
            @csrf
            <input  class="form-control me-2" type="search" name="search"  placeholder="Search by Restaurant" aria-label="Search" style="margin-left: 9%; ">
            <button class="btn btn-success" type="submit">Search</button>

            </form>
        </div>

    <section id="restaurant-list">
        
        <div class="row">
    
        @foreach ($datas as $datas)

          <div class="restaurant-list-card" style="width: 20rem; padding-top: 10%">
            <img src="/restaurantimage/{{$datas->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$datas->title}}</h5>
              <p class="card-text">{{$datas->description}}</p>
              <a href="{{url('/menu-view')}}" class="btn btn-primary">Visit Restaurant</a>
            </div>
          </div>
          
          @endforeach 

        </div>

    </section>

    
    <!-- Footer -->
    <footer id="footer">

        <p class="footer-name fab" style="color: #F0A500;">Hirushi Athukorala</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="footer-name fab" style="color: #F0A500;">Oshada Wanigasekara</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="footer-name fab" style="color: #F0A500;">Umar Ahamed</p>
        <i class="footer-icons fab fa-linkedin"></i>
        <p class="float-right"><a href="#" style="color: #F0A500;">Back to top</a></p>


    </footer>

</body>
</html>



