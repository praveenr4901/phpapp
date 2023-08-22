<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px {{ request()->routeIs('support') ? 'active' : '' }}"  href="{{ route('club-login-and-claims') }}" role="tab"> Club Login and Claims </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px {{ request()->routeIs('mobile-duplication') ? 'active' : '' }}"  href="{{ route('mobile-duplication') }}" role="tab"> Mobile Duplication </a>
        <div class="slide"></div>
    </li>
</ul>