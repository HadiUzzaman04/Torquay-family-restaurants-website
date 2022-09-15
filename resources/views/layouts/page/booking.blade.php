@extends('layouts.master')

@section('content')


<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Book a Table</h1>
      </div>
    </div>
  </div>
</div>

<div class="callback-form contact-us" style="margin: 0">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4>For booking a table you need to fill up the information</h4>
        <br>
        <div class="contact-form">
          <form id="contact" action="{{route('booking.store')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <fieldset>
                   <label for="date" style="display: flex;" >Select Date</label>
                  <input type="date" class="form-control" placeholder="select date" name="date" required="">
                </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset>
                <label for="time" style="display: flex;" >Select Time</label>
                  <input type="time" class="form-control" placeholder="Give the time" name="time" required="">
                </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset>
                <label for="people_ammount" style="display: flex;" >Number Of People</label>
                  <input type="text" class="form-control" placeholder="Number Of people" name="people_ammount" required="">
                </fieldset>
              </div>
              <div class="col-sm-6">
                <fieldset>
                <label for="name" style="display: flex;" >Booked By</label>
                  <input type="text" class="form-control" placeholder="Booked By" name="name" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                <label for="message" style="display: flex;" >Message</label>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" name="message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Book Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-md-4">
        <label>Email</label>
        <p><i class="fa fa-envelope"></i> info@torquayfamilyrestaurant.com</p>

        <br>

        <label>Phone</label>
        <p><i class="fa fa-phone"></i> 306-400-9220</p>

        <br>

        <label>Address</label>
        <p><i class="fa fa-map-marker"></i> 122 Devon St,Torquay SK S0C2L0</p>
      </div>
    </div>
  </div>
</div>


@endsection