<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px {{ (request()->routeIs('reports')|| request()->routeIs('rules-view')) ? 'active' : '' }}"  href="{{ route('rules-view') }}" role="tab"> Rules View</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px  {{ request()->routeIs('first-approval') ? 'active' : '' }}"   href="{{ route('first-approval') }}" role="tab">First Approval (DCIT) </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px {{ request()->routeIs('second-approval') ? 'active' : '' }}"   href="{{ route('second-approval') }}" role="tab">Second Approval</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-17px {{ request()->routeIs('full-view') ? 'active' : '' }}"   href="{{ route('full-view') }}" role="tab">Full View</a>
        <div class="slide"></div>
    </li>
   
</ul>