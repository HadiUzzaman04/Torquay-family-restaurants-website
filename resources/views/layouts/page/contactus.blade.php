@extends('layouts.master')
@section('content')

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</div>
<div class="contact-information">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Phone</h4>
          <p>For more information you can call us</p>
          <p>306-400-9220</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email</h4>
          <p>For more information you can mail us</p>
          <p>info@torquayfamilyrestaurant.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Location</h4>
          <p>Address- 122 Devon St,Torquay SK S0C2L0</p>
          <a href="#">View on Google Maps</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="callback-form contact-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Send us a <em>message</em></h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="{{route('contactus.store')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" name="name" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" name="email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" name="message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="map">
  <!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.1568986403404!2d-103.49518328490079!3d49.14064538874603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5321d38b45be7bf5%3A0xcfaa7954d8d96b10!2sTorquay%20Family%20Restaurant!5e0!3m2!1sen!2sbd!4v1663049397168!5m2!1sen!2sbd" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection