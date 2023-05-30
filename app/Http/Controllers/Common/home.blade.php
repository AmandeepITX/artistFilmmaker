@extends('layouts.app-with-header-footer-homepage')
@section('title', 'Home')
@section('content')
<div class="hero-banner">
    <div class="container-fluid">
        <div class="hero-banner-title">
            <h1>Take Your Local Business Online with TAAACC</h1>
            <div class="sub-title">
                <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
            </div>
        </div>
        <form class="home-search-form" method="GET" action="/discounts-free-services">
            <span>What</span><input class="input-border" name="search" type="search" placeholder="Ex: food, service, barber, hotel">
            <span>Where</span><input type="search" name="city" placeholder="Your City…"> 
            <button class="search-btn"><img src="./img/search.png"></button>
        </form>

    </div>
</div>
<div class="discounts">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="discount-text">
                    <h4>MAKING IT EASY TO FIND YOU</h5>
                    <h2 class="text-center"><span class="yellow-text">Black Chamber</span> Directory</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                    </p>
                </div>
                <div class="learn-btn">
                <a class="yellow-btn" href="/business-signup"">JOIN TODAY</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="organization-outer">
    <div class="organization">
        <h2 class="text-center"><span class="yellow-text">Do Business With</span> Premium Members</h2>
        <div class="container">
            <div class="business-section">
<h3>Featured Industries</h3>
            </div>
            <div class="row">
                
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/spa.png">
                            <p>Beauty & Spa</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/theater-entertainment.png">
                            <p>Arts & Entertainment</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/car.png">
                            <p>Automotive</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/bar.png">
                            <p>Bars</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/medical.png">
                            <p>Health & Medical</p>
                        </div>
                    </div>
                    
                </div>business_website
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/restaurant.png">
                            <p>Restaurants</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/house-real-estate.png">
                            <p>Real Estate</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="business-box">
                        <div class="inner-box">
                            <img src="/img/gardener-shovel.png">
                            <p>Landscaping Services</p>
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="business-section">
<h3>Premium Members</h3>  <a class="yellow-btn" href="/discounts-free-services">MORE MEMBERS</a>
            </div>



            <div class="row ">
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1881666174890634fcfaa8430e.jpg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">Samuel Chang</h5>
   <strong><span>beauty &amp; spa</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?118" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1911666855133635a30ddf1b1c.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">Noble Goodwin</h5>
   <strong><span>Resturants</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?121" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
<div class="col-md-4 col-lg-3">
<div class="card deals-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">

    <h5 class="card-title">vini</h5>
   <strong><span>health &amp; medical</span></strong> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <a href="/profilePage?122" class=" business-btn">BUSINESS PROFILE</a>
  </div>
 
</div>
</div>
</div>
        </div>
        </div>
    </div>
<div class="local-business">
    <div class="container">
<div class="row">
    <div class="col-md-6 col-lg-3"><img src="/img/business.png"></div>
    <div class="col-md-6 col-lg-7">
        <h2>Take Your Local Business
Online and Grow Like a Pro.</h2>
<p>Already a black chamber member? Join today to get exclusive access to more leads, customers and clients, searching for you services.</p>
<a class="grey-btn" href="/business-signup">Join Black Chamber Directory</a>
    </div>
</div>
    </div>
</div>
<div class="container blog-section">
<div class="business-section">
<h3>Blogs & Articles</h3>
            </div>
            <div class="row ">
<div class="col-lg-4 col-md-6">
<div class="card blog-card">
<div class="card-img">
  <img src="/uploads/company/logo/1881666174890634fcfaa8430e.jpg" class="card-img-top" alt="...">
</div>
  <div class="card-body">
    <h5 class="card-title">Motivation And Your Personal Vision An Unbeatable Force</h5>
   <span>10.13.2022</span>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="card-btn">
    <a href="/profilePage?122" class=" business-btn">READ ARTICLE</a>
   </div>
  </div>
 
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card blog-card">
<div class="card-img">
  <img src="/uploads/company/logo/1911666855133635a30ddf1b1c.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">
    <h5 class="card-title">The Number 1 Secret Of Success</h5>
   <span>10.13.2022</span>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <div class="card-btn">
    <a href="/profilePage?122" class=" business-btn">READ ARTICLE</a>
   </div>
  </div>
 
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="card blog-card">
<div class="card-img">
  <img src="/uploads/company/logo/1921666855297635a31818fd90.jpeg" class="card-img-top" alt="...">
</div>
  <div class="card-body">
    <h5 class="card-title">29 Motivational Quotes For Business And Other Work Environments</h5>
   <span>10.13.2022</span> 
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   <div class="card-btn">
    <a href="/profilePage?122" class=" business-btn">READ ARTICLE</a>
   </div>
  </div>
 
</div>
</div>

</div>
</div>
<div class="business-bottom-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="/img/bottom-phone-image.png">
            </div>
            <div class="col-md-7">
                <h2>Does your business need more customers and clients?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="yellow-btn" href="/business-signup">YES, I NEED MORE CUSTOMERS</a>
            </div>
        </div>
    </div>
</div>


<!--  Video Modal -->
<div id="myModal" class="videomodal modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/D0UnqGm_miA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</div>
</div>
<!--  Video Modal -->

<script>
    // $(document).ready(function() {
    //      $('video').prop('muted',true).play()
    //  });
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

@endsection