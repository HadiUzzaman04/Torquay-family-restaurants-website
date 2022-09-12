@extends('layouts.master')

@section('content')

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Menu</h1>
        <span>We change our menu regularly based on the availability of produce and the season.</span>
      </div>
    </div>
  </div>
</div>

<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-1-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Main Menu</h4>
            <p></p>
            <a href="#" target="blank" class="filled-button">Order</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-2-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Kids Menu</h4>
            <a href="#" class="filled-button">Order</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-3-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Special Menu</h4>
            <a href="#" class="filled-button">Order</a>
          </div>
        </div>

        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-4-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Drinks Menu</h4>
            <a href="#" class="filled-button">Order</a>
          </div>
        </div>
        <br>
      </div>
    <br>
  </div>
</div>


@endsection