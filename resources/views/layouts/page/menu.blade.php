@extends('layouts.master')

@section('content')

<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Menu</h1>
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
            <a href="https://drive.google.com/file/d/1l5XbMjnhiGHjJEcI0ACs_4m4xMbYpG5O/view?usp=preview" target="blank" class="filled-button">View Menu</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-2-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Kids Menu</h4>
            <a href="https://drive.google.com/file/d/1bvqBVA72kFhgty-OUj-WyOZn9gIfMUuB/view?usp=preview" target="blank" class="filled-button">View Menu</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/product-3-720x480.jpg')}}" alt="">
          <div class="down-content">
            <h4>Special Menu</h4>
            <a href="https://drive.google.com/file/d/1T7MNjHn78paj2nKO0VO57_yh_uxBRfot/view?usp=preview" target="blank" class="filled-button">View Menu</a>
          </div>
        </div>

        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="{{asset('website/images/blog-image-2-940x460.jpg')}}" alt="">
          <div class="down-content">
            <h4>Drinks Menu</h4>
            <a href="https://drive.google.com/file/d/1U3YJ9zh788HapqsSyOI7qPVj8DP8CBwf/view?usp=preview" target="blank" class="filled-button">View Menu</a>
          </div>
        </div>
        <br>
      </div>
    <br>
  </div>
</div>


@endsection