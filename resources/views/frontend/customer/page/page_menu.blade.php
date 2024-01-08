@extends('frontend.customer.layouts.menu')
@section('menu')
<!doctype html>
<html lang="en">
<body>
@yield('menu')

<!--Page header & Title-->
<section id="page_header">
  <div class="page_title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <h2 class="title">Our Food</h2>
           <p>Check out our menu and some of our special, featured recipies!</p>
        </div>
      </div>
    </div>
  </div>  
  </section>
  
  
  <!-- Our cheffs -->
  <section id="cheffs" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
          <h2 class="heading">Our &nbsp; Kitchen &nbsp; Staff</h2>
          <hr class="heading_space">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="cheffs_wrap_slider">
              <div id="our-cheffs" class="owl-carousel">
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                   <h3>Stafeny Rose</h3>
                   <small>Head Of Kitchen</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs2.jpg') }}" alt="Kitchen Staff">
                   <h3>Michael Reubens</h3>
                   <small>Food Supervisor</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs3.jpg') }}" alt="Kitchen Staff">
                   <h3>Angle Maria</h3>
                   <small>Head Cook</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                   <h3>Stafeny Rose</h3>
                   <small>Food Supervisor</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!-- Our cheffs -->
    <section id="cheffs2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
          <h2 class="heading">Our &nbsp; Kitchen &nbsp; Staff</h2>
          <hr class="heading_space">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="cheffs_wrap_slider">
              <div id="our-cheffs" class="owl-carousel">
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                   <h3>Stafeny Rose</h3>
                   <small>Head Of Kitchen</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs2.jpg') }}" alt="Kitchen Staff">
                   <h3>Michael Reubens</h3>
                   <small>Food Supervisor</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs3.jpg') }}" alt="Kitchen Staff">
                   <h3>Angle Maria</h3>
                   <small>Head Cook</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
                <div class="item">
                  <div class="cheffs_wrap">
                   <img src="{{ asset('frontend/images/our-cheffs1.jpg') }}" alt="Kitchen Staff">
                   <h3>Stafeny Rose</h3>
                   <small>Food Supervisor</small>
                   <p>Enjoy Delicious Food!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
</body>
</html>
