<header id="homeheader">
   <div class="container-fluid p-0">
      <div class="row">
         <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg top-menu-2" id="mainheader">
               <a class="navbar-brand" href="https://theahap.com/"><img src="{{ asset('/img/AHAP Logo.png') }}"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><img src="{{ asset('/img/menu2.png') }}"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link{{ request()->routeIs('discounts-free-services') ? ' active' : '' }}" aria-current="page" href="{{ route('discounts-free-services') }}">DISCOUNTS & FREE SERVICES</a>
                     </li>
                     @if(Auth::check())
                     <li>
                        <a class="nav-link">LIST YOUR BUSINESS</a>
                     </li>
                     <li class="nav-item">
                        <a class="sign-up nav-link">
                           HERO SIGN UP
                           <br>
                           <p>(Get your AHAP card!)</p>
                        </a>
                     </li>
                     @else
                     <li class="listbtn">
                        <a class="nav-link{{ request()->routeIs('business-signup') ? ' active' : '' }}" href="{{ route('business-signup') }}">LIST YOUR BUSINESS</a>
                     </li>
                     <li class="nav-item">
                        <a class="sign-up nav-link{{ request()->routeIs('user-signup') ? ' active' : '' }}" href="{{ route('user-signup') }}">
                            <span>
                           HERO SIGN UP
                           <br>
                           <p>(Get your AHAP card!)</p>
</span>
                        </a>
                     </li>
                     @endif
                     <li class="nav-item contactbtn">
                        <a class="nav-link{{ request()->routeIs('contact-us') ? ' active' : '' }}" href="https://theahap.com/contact-us/">CONTACT US</a>
                     </li>
                     <li class="nav-item contactbtn">
                        <a class="nav-link{{ request()->routeIs('about-ahap') ? ' active' : '' }}" href="https://theahap.com/about-ahap/">ABOUT AHAP</a>
                     </li>
                     @if(Auth::check() && Auth::user()->user_type == "user")
                     <li class="nav-item loginbtn">
                        <a class="nav-link{{ request()->routeIs('user-profile') ? ' active' : '' }}" href="{{ route('user-profile') }}">Profile</a>
                     </li>
                     @endif
                     @if(Auth::check() && Auth::user()->user_type=="company") 
                     <li class="nav-item loginbtn">
                        <a class="nav-link{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{ route('company-profile') }}">Profile</a>
                     </li>
                     @endif
                     @if(!Auth::check()) 
                     <li class="nav-item loginbtn">
                        <a class="nav-link{{ request()->routeIs('login') ? ' active' : '' }}" href="https://login.theahap.com/">LOGIN</a>
                     </li>
                     @endif
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</header>