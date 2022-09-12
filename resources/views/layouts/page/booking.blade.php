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
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-sm-6">
                    <fieldset>
                      <input type="date" class="form-control" placeholder="select date" name="date" required="">
                    </fieldset>
                  </div>
                  <div class="col-sm-6">
                    <fieldset>
                    <select class="form-control">
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="12:30 PM">12:30 PM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="01:30 PM">01:30 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="02:30 PM">02:30 PM</option>
                        <option value="07:00 PM">07:00 PM</option>
                        <option value="07:30 PM">07:30 PM</option>
                        <option value="08:00 PM">08:00 PM</option>
                        <option value="08:30 PM">08:30 PM</option>
                        <option value="09:00 PM">09:00 PM</option>
                        <option value="09:30 PM">09:30 PM</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-sm-6">
                    <fieldset>
                    <input type="text" class="form-control" placeholder="Number Of people" required="">
                    </fieldset>
                  </div>
                  <div class="col-sm-6">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Your Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Notes" required=""></textarea>
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
            <p><a href="#"><i class="fa fa-envelope"></i> contact@company.com</a></p>

            <br>

            <label>Phone</label>
            <p><a href="#"><i class="fa fa-phone"></i>  +1 333 4040 5566</a></p>

            <br>

            <label>Address</label>
            <p><i class="fa fa-map-marker"></i>  212 Barrington Court New York, ABC 10001 United States of America</p>
          </div>
        </div>
      </div>
    </div>


@endsection