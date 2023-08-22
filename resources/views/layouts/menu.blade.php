<div class="menu">
    <ul class="breadcrumb">

        @if(auth()->user())
            @php
                $user = auth()->user();
                $roleNames = auth()->user()->getRoleNames();
            @endphp
            @if(auth()->user()->hasRole('admin'))
                <li class="breadcrumb-item mr-2 {{ request()->is('admin/support*') ? 'active' : '' }}">
                    <a href="">Support</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('admin/demo*') ? 'active' : '' }}">
                    <a href="">Demo</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('admin/tickets*') ? 'active' : '' }}">
                    <a href="{{ route('tickets') }}">Help</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('admin/reports*') ? 'active' : '' }}">
                    <a href="{{ route('report.rules_view') }}">Report</a>
                </li>
                @elseif(auth()->user()->hasRole('secretary'))
                <li class="breadcrumb-item mr-2 {{ request()->is('users/secretary/tickets*') ? 'active' : '' }}">
                    <a href="{{ route('tickets') }}">Help</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('users/secretary/members*') ? 'active' : '' }}">
                    <a href="#">CMS</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('users/secretary/reports*') ? 'active' : '' }}">
                    <a href="{{ route('report.rules_view') }}">Report</a>
                </li>
                @elseif(auth()->user()->hasRole('president'))
                <li class="breadcrumb-item mr-2 {{ request()->is('users/president/tickets*') ? 'active' : '' }}">
                    <a href="{{ route('tickets') }}">Help</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('users/president/members*') ? 'active' : '' }}">
                    <a href="#">CMS</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->is('users/president/reports*') ? 'active' : '' }}">
                    <a href="#">Report</a>
                </li>
                @elseif(auth()->user()->hasRole('treasurer'))
                <li class="breadcrumb-item mr-2 {{ request()->routeIs('treasurer.tickets') ? 'active' : '' }}">
                    <a href="{{ route('tickets') }}">Help</a>
                </li>
                <li class="breadcrumb-item mr-2 {{ request()->routeIs('treasurer.reports') ? 'active' : '' }}">
                    <a href="#">Report</a>
                </li>
                @elseif(auth()->user()->hasRole('claimsadmin'))
                <li class="breadcrumb-item mr-2 {{ request()->routeIs('first-approval') ? 'active' : '' }}">
                    <a href="{{ route('first-approval') }}">Reports</a>
                </li>              
                @elseif(auth()->user()->hasRole('superadmin'))
                <li class="breadcrumb-item mr-2 {{  request()->is('cms*') ? 'active' : '' }}">
                    <a href="{{route('members')}}">CMS</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('support*') ? 'active' : '' }}">
                    <a href="{{ route('support.duplicates') }}">Support</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('election*') ? 'active' : '' }}">
                    <a href="{{route('election.clubs')}}">Election</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('users/help/demo*') ? 'active' : '' }}">
                    <a href="#">Demo</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('users/help/help*') ? 'active' : '' }}">
            <a href="{{route('tickets')}}">Help</a>
        </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('users/help/reports*') ? 'active' : '' }}">
                    <a href="{{ route('report.rules_view') }}">Report</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('import/excel*') ? 'active' : '' }}">
                    <a href="{{ route('import.excel') }}">Import</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('rules*') ? 'active' : '' }}">
                    <a href="{{ route('rules') }}"> Rules View</a>
                </li>
                <li class="breadcrumb-item mr-2 {{  request()->is('designation*') ? 'active' : '' }}">
                    <a href="{{ route('designation') }}"> Designation</a>
                </li>
            @endif
        @endif
    </ul>
</div>
