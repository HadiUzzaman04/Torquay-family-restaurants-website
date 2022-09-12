@extends('layouts.master')

@section('content')

<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                    <h4>Make a booking, please use the contact details below or use the booking form</h4>
                    <a href="book-table.html" class="filled-button">Book a Table</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h4>Check out our menu</h4>
                    <a href="menu.html" class="filled-button">Menu</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                    <h6>alias officia qui quae vitae natus!</h6>
                    <h4>Market Analysis<br>&amp; Statistics</h4>
                    <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate mi. Sed nec cursus augue. Phasellus lacinia ac sapien vitae dapibus. Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</p>
                    <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<!-- Banner Ends Here -->

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our <em>Events</em></h2>
                    <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{asset('website/images/other-1-720x480.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Weddings</h4>
                        <div style="margin-bottom:10px;">
                            <span> <sup>$</sup>1500.00 - <sup>$</sup>3500.00 </span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                        <a href="book-table.html" class="filled-button">Book Now</a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{asset('website/images/other-2-720x480.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Birthdays</h4>
                        <div style="margin-bottom:10px;">
                            <span> <sup>$</sup>1500.00 - <sup>$</sup>3500.00 </span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                        <a href="book-table.html" class="filled-button">Book Now</a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{asset('website/images/other-3-720x480.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Anniversaries</h4>
                        <div style="margin-bottom:10px;">
                            <span> <sup>$</sup>1500.00 - <sup>$</sup>3500.00 </span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p>
                        <a href="book-table.html" class="filled-button">Book Now</a>
                    </div>
                </div>

                <br>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="more-info-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{asset('website/images/about-1-570x350.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="right-content">
                        <span>Who we are</span>
                        <h2>Get to know about <em>our restaurant</em></h2>
                        <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus</p>
                        <a href="about.html" class="filled-button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="more-info">
    <div class="container">
        <div class="section-heading">
            <h2>Read our <em>Blog</em></h2>
            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
        </div>

        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                </ul>

                <br>

                <div class="text-center">
                    <a href="blog.html" class="filled-button">Read More</a>
                </div>

                <br>
            </div>

            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="{{asset('website/images/blog-image-1-940x460.jpg')}}" alt="">
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
                    </article>
                    <article id='tabs-2'>
                        <img src="{{asset('website/images/blog-image-2-940x460.jpg')}}" alt="">
                        <h4><a href="blog-details.html">Mauris lobortis quam id dictum dignissim</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                    </article>
                    <article id='tabs-3'>
                        <img src="{{asset('website/images/blog-image-3-940x460.jpg')}}" alt="">
                        <h4><a href="blog-details.html">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                        <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                        </p>
                    </article>
                </section>
            </div>
        </div>


    </div>
</div>

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>What they say <em>about us</em></h2>
                    <span>testimonials from our greatest clients</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-testimonials owl-carousel">

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>George Walker</h4>
                            <span>Chief Financial Analyst</span>
                            <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                            <div class="testimonial-item">
                                <div class="inner-content">
                                    <h4>John Smith</h4>
                                    <span>Market Specialist</span>
                                    <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    <div class="testimonial-item">
                                        <div class="inner-content">
                                            <h4>David Wood</h4>
                                            <span>Chief Accountant</span>
                                            <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                                            <div class="testimonial-item">
                                                <div class="inner-content">
                                                    <h4>Andrew Boom</h4>
                                                    <span>Marketing Head</span>
                                                    <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection