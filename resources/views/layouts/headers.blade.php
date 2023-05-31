<header>
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <nav class="navbar  top-menu-2">
               <a class="navbar-brand" href="#">
                  <p class="logo"><img src="{{ asset('/img/artist-logomain-1.png') }}"></p>
               </a>
               <div class="right-menu-section">
                  @if(!Auth::check())
                  <div class="nav-item loginbtn">
                     <a class="nav-link{{ request()->routeIs('login') ? ' active' : '' }}" href="/login">sign in</a>
                  </div>
                  @if (Route::has('register'))
                      <div class="listbtn">
                         {{--<a class="nav-link{{ request()->routeIs('business-signup') ? ' active' : '' }}" href="{{ route('business-signup') }}">JOIN</a>--}}
                         <a class="nav-link{{ request()->routeIs('register') ? ' active' : '' }}" href="{{ route('register') }}">JOIN</a>
                      </div>
                  @endif

                  @endif

                  @if(Auth::check() && Auth::user()->user_type == "artist")
                  <div class="nav-item loginbtn">
                     <a class="nav-link{{ request()->routeIs('user-profile') ? ' active' : '' }}" href="{{ route('user-profile') }}">Profile</a>
                  </div>
                  @endif
                  @if(Auth::check() && Auth::user()->user_type== "filmmaker") <div class="nav-item loginbtn">
                     <a class="nav-link{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{ route('company-profile') }}">Profile</a>
                  </div>
                  @endif

                  @if(Auth::check() && Auth::user()->user_type == "company")
                  <div class="my-account">
                     <a class="nav-link{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{route('company-profile')}}">My Account</a>
                  </div>
                  @endif
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><img src="{{ asset('/img/menu1.png') }}"></span>
                  </button>
               </div>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                  <li class="close-menu-btn"><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">x</span>
               </button></li>
                     <li class="nav-item">
                        <a class="nav-link{{ request()->routeIs('discounts-free-services') ? ' active' : '' }}" aria-current="page" href="{{ route('discounts-free-services') }}"> Filmmakers & Artist </a>
                     </li>
                     @if(Auth::check())

                     @else

                     <!-- <li class="nav-item">
                        <a class="sign-up nav-link{{ request()->routeIs('user-signup') ? ' active' : '' }}" href="{{ route('user-signup') }}">
                           <span> HERO SIGN UP
                              <br>
                              <p>(Get your AHAP card!)</p>
                           </span>
                        </a>
                     </li> -->
                     @endif
                     <li class="nav-item contactbtn">
                        <a class="nav-link{{ request()->routeIs('contact-us') ? ' active' : '' }}" href="{{route('contact-us')}}">Contact Us</a>
                     </li>
                     <!-- <li class="nav-item contactbtn">
                        <a class="nav-link{{ request()->routeIs('about-ahap') ? ' active' : '' }}" href="https://theahap.com/about-ahap/">ABOUT AHAP</a>
                     </li> -->
                     <!--@if(Auth::check() && Auth::user()->user_type == "artist")-->
                     <!--<li class="nav-item loginbtn">-->
                     <!--   <a class="nav-link{{ request()->routeIs('user-profile') ? ' active' : '' }}" href="{{ route('user-profile') }}">Profile</a>-->
                     <!--</li>-->
                     <!--@endif-->
                     <!--@if(Auth::check() && Auth::user()->user_type== "filmmaker") <li class="nav-item loginbtn">-->
                     <!--   <a class="nav-link{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{ route('company-profile') }}">Profile</a>-->
                     <!--</li>-->
                     <!--@endif-->
                     @if(!Auth::check())
                  <div class="nav-item mobile-link">
                     <a class="nav-link{{ request()->routeIs('login') ? ' active' : '' }}" href="/login">Sign in</a>
                  </div>

                  <div class="nav-item mobile-link">
                     <a class="nav-link{{ request()->routeIs('business-signup') ? ' active' : '' }}" href="{{ route('business-signup') }}">JOIN</a>
                  </div>

                  @endif
                  @if(Auth::check() && Auth::user()->user_type == "company")
                  <div class="nav-item mobile-link">
                     <a class="nav-link{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{route('company-profile')}}">My account</a>
                  </div>
                  @endif
                  </ul>
               </div>

            </nav>
         </div>
      </div>
   </div>
</header>
