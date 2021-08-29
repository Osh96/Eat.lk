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
    </head>

    <body>

        <!--Contact Us form -->
        {!! Form::open(['route'=>'contact.submit'])!!}
        <section id="contactUs-form">
            <div class="text-format">
                <h1>Send us a Message</h1>
               
            </div>

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @endif

            
                
                <div class="col-md-6">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="name" class="form-control" name="name"  id="inputNameContact">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email"  id="inputEmailContact">
                </div>
                <div class="col-12">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject"  id="inputSubjectContact">
                </div>
                <div class="mb-3">
                    <label for="textArea" class="form-label">Your Message</label>
                    <textarea class="form-control"  id="textareaContact" name="message" rows="3"></textarea>
                </div>
            
            
            <button type="submit" class="btn btn-primary">Send Message</button>
        </section>
        {!! Form::close()!!}
        <section id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.761503165684!2d79.85980196208999!3d6.919090552851194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596d3cb8fe07%3A0x2b0ae2edd563a661!2sAsia%20Pacific%20Institute%20of%20Information%20Technology%20(APIIT)!5e0!3m2!1sen!2slk!4v1626210826896!5m2!1sen!2slk"
                width="1024" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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