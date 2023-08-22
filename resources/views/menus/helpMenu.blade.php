<!-- Nav tabs -->
<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{  request()->is('help/tickets') ? 'active' : '' }}"
            href="{{ route('tickets') }}" role="tab">Tickets</a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-10 font-weight-bold">
        <a class="nav-link fz-18px {{  request()->is('help/departments') ? 'active' : '' }}"
            href="{{ route('help.departments') }}" role="tab">Departments</a>
        <div class="slide"></div>
    </li>
</ul>
