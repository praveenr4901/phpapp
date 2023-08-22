<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <div class="mobile-search waves-effect waves-light">
                <div class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-prepend search-close"><i
                                    class="ti-close input-group-text"></i></span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn"><i
                                    class="ti-search input-group-text"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="mobile-options waves-effect waves-light">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                </li>
            </ul>
            <ul class="nav-right">
                @if(auth()->check())
                <li class="user-profile">
                    <a href="" class="waves-effect waves-light">
                        <span>Club Name</span>
                    </a>
                </li>
                <li class="user-profile header-notification">
                    <a href="#!" class="waves-effect waves-light">
                        <span>{{ auth()->user()->member->name }}</span>
                        <i class="ti-angle-down"></i>
                    </a>
                    @if(auth()->user())
                    @php
                    $roleNames = auth()->user()->getRoleNames();
                    $route = $roleNames[0].'.profile';
                    @endphp
                    @endif
                    <ul class="show-notification profile-notification">
                        <li class="waves-effect waves-light">
                            <a href="{{ route('profile') }}">
                                <i class="ti-user"></i> Profile
                            </a>
                        </li>
                        <li class="waves-effect waves-light">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="user-profile">
                    <a href="{{ route('login') }}" class="waves-effect waves-light">
                        <span>Login</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>