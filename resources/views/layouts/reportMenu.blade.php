<!-- Nav tabs -->
<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{ request()->routeIs('report.rules_view') ? 'active' : '' }}" href="{{ route('report.rules_view') }}">Rules View</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{ request()->routeIs('second-approval') ? 'active' : '' }}" href="{{ route('second-approval') }}">Second Approval</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{ request()->routeIs('report.claims') || request()->routeIs('report.claims_rule') ? 'active' : '' }}" href="{{ route('report.claims') }}">Claims</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{ request()->routeIs('report.previous') ? 'active' : '' }}" href="{{ route('report.previous') }}">Previous</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{ request()->routeIs('report.sns') ? 'active' : '' }}" href="{{ route('report.sns') }}">SNS</a>
        <div class="slide"></div>
    </li>
</ul>
