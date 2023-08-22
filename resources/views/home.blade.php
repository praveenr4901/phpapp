@extends('layouts.main')

@section('title','home')

@section('content')

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('layouts.userMenu')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    @include('layouts.pageHeader')
                    <!-- Page-header end -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('stylesheets')
@endpush
@push('javascripts')
@endpush