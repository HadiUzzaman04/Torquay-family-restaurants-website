@extends('layouts.master')
@section('content')

<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                    <h4>Make a booking, please use the contact details below or use the booking form</h4>
                    <a href="{{route('booking')}}" class="filled-button">Book a Table</a>
                </div>
            </div>
        </div>
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h4>Check out our menu</h4>
                    <a href="{{route('menu')}}" class="filled-button">Menu</a>
                </div>
            </div>
        </div>
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                    <h4>Get to know more about our restaurant</h4>
                    <a href="{{('contactus')}}" class="filled-button">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our <em>Events</em></h2>
                    <span>We also orginazie some events for our customer </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{asset('website/images/other-1-720x480.jpg')}}" alt="">
                    <div class="down-content">
                        <h4>Weddings</h4>
                        <div style="margin-bottom:10px;">
                            <span> <sup>$</sup>5000.00 - <sup>$</sup>7500.00 </span>
                        </div>
                        <p>You can also make a booking for Weddings</p>
                        <a href="{{route('booking')}}" class="filled-button">Book Now</a>
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
                        <p>You can also make a booking for Birthdays</p>
                        <a href="{{route('booking')}}" class="filled-button">Book Now</a>
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
                            <span> <sup>$</sup>2500.00 - <sup>$</sup>4500.00 </span>
                        </div>
                        <p>You can also make a booking for Anniversaries</p>
                        <a href="{{route('booking')}}" class="filled-button">Book Now</a>
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
                        <p>At Torquay Family Restaurant, we promise you a meal to delight all of your culinary senses and bring you to the heart</p>
                        <a href="{{route('aboutus')}}" class="filled-button">Read More</a>
                    </div>
                </div>
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
                            <p>Great service and the food was very tasty.</p>
                            <div class="testimonial-item">
                                <div class="inner-content">
                                    <h4>John Smith</h4>
                                    <span>Market Specialist</span>
                                    <p>Great service and the food was very tasty.</p>
                                    <div class="testimonial-item">
                                        <div class="inner-content">
                                            <h4>David Wood</h4>
                                            <span>Chief Accountant</span>
                                            <p>Great service and the food was very tasty.</p>
                                            <div class="testimonial-item">
                                                <div class="inner-content">
                                                    <h4>Andrew Boom</h4>
                                                    <span>Marketing Head</span>
                                                    <p>Great service and the food was very tasty.</p>
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