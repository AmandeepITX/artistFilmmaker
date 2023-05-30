@extends('layouts.app-with-header-footer-homepage')
@section('title', 'Black Chambers of Commerce')
@section('content')
<div class="hero-banner">
  <div class="container-fluid">
    <div class="hero-banner-title">
      <h1>Connect and Shop with Black Chamber Members</h1>
      <div class="sub-title">
        <!-- <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p> -->
      </div>
    </div>
    <form class="home-search-form" method="GET" action="{{route('discounts-free-services')}}">
      <span>What</span><input class="input-border" name="search" type="search" placeholder="Search by Name">
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
          <h4>MAKING IT EASY TO FIND YOU</h4>
          <h2 class="text-center"><span class="yellow-text">Shop. Connect. </span> Support</h2>
          <p>Connect and do business with other black chamber of commerce businesses across the nation. Also gain access to resources to help grow your business revenue.
          </p>
        </div>
        <div class="learn-btn">
          @if(auth()->check())
          <a class="yellow-btn" href="{{route('company-profile')}}">My Account</a>
          @else
          <a class="yellow-btn" href="{{route('register')}}">JOIN TODAY</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class=" organization-outer">
  <div class="organization">
    <h2 class="text-center"><span class="yellow-text">Do Business With</span> Premium Members</h2>
    <div class="container">
      <div class="business-section">
        <h3>Featured Industries</h3><a class="yellow-btn" href="/black-chamber-member-directory">View All Industries</a>
      </div>
      <div class="row">

        <div class="col-md-4 col-lg-3">
          <a href="/black-chamber-member-directory?industry=Beauty Products" class="b-box">
            <div class="business-box">
              <div class="inner-box">
                <img src="/img/spa.png">
                <p>Beauty Products </p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-3">
          <a href="/black-chamber-member-directory?industry=Business Services" class="b-box">
            <div class="business-box">
              <div class="inner-box">
                <img src="/img/Business.svg">
                <p>Business Services</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-3">
          <a href="/black-chamber-member-directory?industry=Education" class="b-box">
            <div class="business-box">
              <div class="inner-box">
                <img src="/img/Education.svg">
                <p>Education</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-3">
          <a href="/black-chamber-member-directory?industry=Retail" class="b-box">
            <div class="business-box">
              <div class="inner-box">
                <img src="/img/shopping-store.svg">
                <p>Retail</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-lg-3">
          <a href="/black-chamber-member-directory?industry=Health Care" class="b-box">
            <div class="business-box">
              <div class="inner-box">
                <img src="/img/medical.png">
                <p>Health Care</p>
              </div>
          </a>
        </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3">
        <a href="/black-chamber-member-directory?industry=Food Truck / Catering" class="b-box">
          <div class="business-box">
            <div class="inner-box">
              <img src="/img/restaurant.png">
              <p>Food Truck / Catering</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3">
        <a href="/black-chamber-member-directory?industry=Real Estate" class="b-box">
          <div class="business-box">
            <div class="inner-box">
              <img src="/img/house-real-estate.png">
              <p>Real Estate</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 col-lg-3">
        <a href="/black-chamber-member-directory?industry=Clothing and Apparel" class="b-box">
          <div class="business-box">
            <div class="inner-box">
              <img src="/img/Clothing.svg">
              <p>Clothing and Apparel</p>
            </div>
          </div>
        </a>
      </div>

    </div>
    <div class="business-section">
      <h3>Premium Members</h3> <a class="yellow-btn" href="{{route('discounts-free-services')}}">MORE MEMBERS</a>
    </div>



    <div class="row responsive">
      {{--@foreach ($industryName as $show)--}}
      @foreach ($users as $user)

      <div class="col-md-4 col-lg-3">
        <div class="card deals-card">
          <div class="card-img">
            @if(empty($user->company_deal->profile_image))
            <img src="https://via.placeholder.com/300?text=Black Chamber Network" class="card-img-top" alt="...">
            @else
            <img src="{{ asset(@$user->company_deal->profile_image) }}" onerror="this.src='https://via.placeholder.com/300?text=Black Chamber Network'" class="card-img-top" alt="...">
            @endif
          </div>
          <div class="card-body">

            <h5 class="card-title">{{@$user->f_name}} {{@$user->l_name}}</h5>
            <span class="b_name">{{@$user->b_name}}</span>
            <span>
              @if(@$user->industries)
              @foreach($user->industries as $i => $industryData)
              {{ @$i>0?', ':''}}{{$industryData->industries->industry_name}}
              @endforeach
              @endif
            </span>

            <p class="card-text">{{$user->description}}</p>
            <a href="{{route('profilePage').'?id='.$user->id}}" class=" business-btn">BUSINESS PROFILE</a>
          </div>

        </div>
      </div>
      @endforeach
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
        <p>Not a black chamber member? Join today to get exclusive access to more customers and clients, resources, support, and connect with other black chamber members around the nation. </p>
        @if(!auth()->check())
        <a class="grey-btn" href="{{route('register')}}">Join Black Chamber Directory</a>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- <div class="container blog-section">
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
        </div> -->
<div class="business-bottom-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="/img/bottom-phone-image.png">
      </div>
      <div class="col-md-7">
        <h2>Does your business need more customers and clients?</h2>
        <p>Already a black chamber member? Get your exclusive member access to more customers and clients to help grow your business revenue.</p>
        <a class="yellow-btn" href="/contact-us">YES, I NEED MORE CUSTOMERS</a>
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
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
<script>
  $('.responsive').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }

      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>
@endsection