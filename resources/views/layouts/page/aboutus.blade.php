@extends('layouts.master')
@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <h2>Get to know about <em>our Restaurant</em></h2>
                                <p>Below Decks is a picturesque restaurant located on Beacon Quay, overlooking Torquay's historic harbour. Baked in sunshine from sunrise to sunset, the full flavour of our fabulous harbour is available in the unique environment of Torquay harbour restaurant Below Decks.
                                    <br><br>With close ties to fresh food suppliers and breweries in the local area, we are well known for our sumptuous seafood meals, alongside our diverse traditional menu and array of relaxing drinks.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="{{asset('website/images/about-1-570x350.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <h2>Our Location</h2>
                    <p>One of the prime features of Below Decks is its placement in the beautiful location of Torquay Harbour. With a view of the buzzing activity of the harbour and outside seating, Below Decks creates picturesque meal memories.
                        <br><br>Below Decks serves breakfast, lunch and dinner, making it a fantastic place to eat when enjoying a day out in Torquay. Our prime location doesn't just afford you a beautiful view of the harbour, but we're also located minutes away from the most important and enjoyable locations in Torquay!
                    </p>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">10000</div>
                            <div class="count-title">Tables served</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">33280</div>
                            <div class="count-title">Happy clients</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">12</div>
                            <div class="count-title">Cities</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">26</div>
                            <div class="count-title">Restaurants</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection