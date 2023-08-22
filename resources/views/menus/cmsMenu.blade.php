
<!-- Nav tabs -->
<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-18px {{  request()->is('cms/members') ? 'active' : '' }}"
            href="{{route('members')}}" role="tab"> Members</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12 font-weight-bold">
        <a class="nav-link fz-18px {{  request()->is('cms/clubs') ? 'active' : '' }}"
            href="{{ route('clubs') }}" role="tab"> Clubs</a>
        <div class="slide"></div>
    </li>

</ul>
