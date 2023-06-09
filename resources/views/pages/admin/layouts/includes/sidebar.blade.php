<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
               {{-- <p class="logo">Black Chamber Network</p>--}}
               <a href="{{ route('admin-dashboard') }}"> <img src="{{asset('img/artistlogomain.png')}}" class="img elevation-2" alt="User Image" style="width: 70%;"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">

                    <a class="nav-link{{ request()->routeIs('admin-dashboard') ? ' active' : '' }}" href="{{ route('admin-dashboard') }}">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>

                </li>
                <li class="nav-item">

                    <a class="nav-link{{ request()->routeIs('company-index') ? ' active' : '' }}" href="{{ route('company-index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Artist
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('filmaker-index') ? ' active' : '' }}" href="{{ route('filmaker-index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Filmmaker
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('genre-index') ? ' active' : '' }}" href="{{ route('genre-index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Genre
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>

{{--
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('category-index') ? ' active' : '' }}" href="{{ route('category-index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Category Listing
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>
                --}}
                {{-- <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('admin.industry.index') ? ' active' : '' }}" href="{{ route('admin.industry.index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                          Industry Listing
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link{{ request()->routeIs('admin.states.index') ? ' active' : '' }}" href="{{ route('admin.states.index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                          States Listing
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('admin.member.index') ? ' active' : '' }}" href="{{ route('admin.member.index') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                          Chamber Member Listing
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('settings') ? ' active' : '' }}" href="{{ route('settings') }}">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('logout') ? ' active' : '' }}" href="{{ route('user-index') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Logout
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>


            </ul>
        </nav>

    </div>

</aside>
