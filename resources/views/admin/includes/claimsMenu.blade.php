<ul class="nav nav-tabs md-tabs" role="tablist">
    <li class="nav-item mw-12">
        <a class="nav-link {{ (request()->routeIs('demo')|| request()->routeIs('claims')) ? 'active' : '' }}"  href="{{ route('demo') }}" role="tab"> Part A </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-b') ? 'active' : '' }}"   href="{{ route('part-b') }}" role="tab">Part B </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-c') ? 'active' : '' }}"   href="{{ route('part-c') }}" role="tab">Part C </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-d') ? 'active' : '' }}"   href="{{ route('part-d') }}" role="tab">Part D </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-e') ? 'active' : '' }}"   href="{{ route('part-e') }}" role="tab">Part E </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-f') ? 'active' : '' }}"  href="{{ route('part-f') }}" role="tab">Part F </a>
        <div class="slide"></div>
    </li>
    <li class="nav-item mw-12">
        <a class="nav-link {{ request()->routeIs('part-g') ? 'active' : '' }}"  href="{{ route('part-g') }}" role="tab">Part G </a>
        <div class="slide"></div>
    </li>
</ul>