<x-app-layout>
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

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            
          </ul>
        </div>
      </nav>
    </div>
  </section>
  
  
  <!-- Account display Nav bar -->
  <section id="customer-restaurant-navBar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="customer-restaurant-navBar">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Your Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Payments</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </section>

  <!-- Account display -->
  <section id="account">
    <div class="profilePic"></div>

    <h1>My Account</h1>
    <div class="row">
      <form>
        <label for="fname">Name:</label><br>
        {{Auth::user()->name}}<br>
        <label for="email">Email:</label><br>
        {{Auth::user()->email}}<br>
        <label for="mobile">Mobile No:</label><br>
        
      </form>
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

</x-app-layout>