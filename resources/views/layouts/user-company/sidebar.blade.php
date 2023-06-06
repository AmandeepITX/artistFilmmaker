<div class="col-md-3 profile-info">

    <div class="side-bar ">

        <ul>

            @if (Auth::user()->user_type == 'filmmaker')



            <li> <a class="{{ request()->routeIs('company-profile') ? ' active' : '' }}" href="{{ route('company-profile') }}">

                    INFORMATION</a></li>

            <li><a class="{{ request()->routeIs('change-company-password') ? ' active' : '' }}" href="{{ route('change-company-password') }}">

                    CHANGE PASSWORD</a></li>

            <li>



                @else





            <li><a class="{{ request()->routeIs('user-profile') ? ' active' : '' }}" href="{{ route('user-profile') }}">

                    INFORMATION</a></li>

            <!--@if (Auth::user()->status == 'approved')-->

            <!--<li><a class="{{ request()->routeIs('hero-card') ? ' active' : '' }}" href="{{ route('hero-card') }}">-->

            <!--       HERO CARD</a></li>  -->

            <!--@endif-->

            <li><a class="{{ request()->routeIs('change-user-password') ? ' active' : '' }}" href="{{ route('change-user-password') }}">

                    CHANGE PASSWORD</a></li>

            <li>

                @endif

            <li class="nav-item">

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    LOGOUT

                </a>



                <form id="logout-form" action="{{ route('logout') }}" method="POST">

                    @csrf

                </form>

            </li>





        </ul>

    </div>

</div>
