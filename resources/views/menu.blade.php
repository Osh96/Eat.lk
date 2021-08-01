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
                    <a class="nav-link" style="color: #F0A500;" href="/cart-view">Cart</a>
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

<!-- Menu Section -->
<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pizza Hut</h2>
        <p>Check Out our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-starters">Starters</li>
            <li data-filter=".filter-salads">Salads</li>
            <li data-filter=".filter-mains">Mains</li>
            <li data-filter=".filter-specialty">Specialty</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 menu-item filter-mains">
          <img src="images/1.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>BBQ Chicken Pizza</a><span>Rs 1800.00</span>
          </div>
          <div class="menu-ingredients">
            BBQ chicken accompanied by spicy jalapenos and a double layer of mozzarella cheese
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-mains">
          <img src="images/2.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Pasta</a><span>Rs 850.00</span>
          </div>
          <div class="menu-ingredients">
            The famed Italian spaghetti with minced chicken complemented by delicious mozzarella cheese.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-mains">
          <img src="images/3.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Chicken Noodles</a><span>Rs 800.00</span>
          </div>
          <div class="menu-ingredients">
            A sumptuous dish, this chicken recipe is prepared by stir-frying chicken breast and then sautéing in soya sauce and red chilli sauce.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="images/caesar.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Caesar Selections</a><span>Rs 950.00</span>
          </div>
          <div class="menu-ingredients">
            green salad of romaine lettuce and croutons dressed with lemon juice, olive oil, egg and black pepper.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="images/tuscan-grilled.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Tuscan Grilled</a><span>Rs 1000.00</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="images/mozzarella.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Mozzarella Stick</a><span>Rs 800.00</span>
          </div>
          <div class="menu-ingredients">
            Mozzarella sticks are elongated pieces of battered or breaded mozzarella.
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="images/greek-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>Rs 750.00</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="images/spinach-salad.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Spinach Salad</a><span>Rs 600.00</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="images/lobster-roll.jpg" class="menu-img" alt="">
          <div class="menu-content">
            <a>Lobster Roll</a><span>Rs 2400.00</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div>

      </div>

    </div>
  </section>



<!-- Footer -->

<!-- Vendor JS Files -->
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>


</body>
</html>