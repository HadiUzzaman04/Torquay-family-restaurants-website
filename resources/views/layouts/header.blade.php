<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>info@torquayfamilyrestaurant.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>306-400-9220</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">
                <div class="logo" style="height: 52px; width: 135px;">
                    <img src="{{asset('website/images/restaurant-logo.JPG')}}" style="height: 100%; width:100%; object-fit: cover;" alt="Venue Logo">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="#">
                        <a class="nav-link" href="{{('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{('booking')}}">Book a Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('menu')}}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>