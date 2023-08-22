<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-16px {{  request()->is('election/clubs') ? 'active' : '' }}" href="{{route('election.clubs') }}">Clubs</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-16px {{  request()->is('election/dues') ? 'active' : '' }}" href="{{route('dues') }}">Dues</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-16px {{  request()->is('election/no-dues') ? 'active' : '' }}" href="{{route('nodues') }}">No Dues</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-16px {{  request()->is('election/credentials') ? 'active' : '' }}" href="{{route('credentials') }}">Credentials</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-16px" href="">Credentials Report</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold {{  request()->is('election/delegates-submitted-report') ? 'active' : '' }}">
        <a class="nav-link fz-16px" href="{{route('delegates-submitted-report') }}">Delegates Submitted Report</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold {{  request()->is('election/no-dues-issued-report') ? 'active' : '' }}">
        <a class="nav-link fz-16px" href="{{route('no-dues-issued-report') }}">No Dues Issued Report</a>
        <div class="slide"></div>
    </li>

</ul>
