@extends('layouts.app')

@section('title','tickets')

@section('content')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
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
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                        </ul>
                        @include('layouts.userMenu')
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                    @include('layouts.pageHeader')
                    <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="row m-b-30">
                                                        <div class="col-lg-12 col-md-12 col-xl-12">
                                                            <!-- Nav tabs -->
                                                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                                                <li class="nav-item mw-10 font-weight-bold">
                                                                    <a class="nav-link fz-18px {{  request()->is('rules') ? 'active' : '' }}"
                                                                       href="{{route('rules') }}" role="tab">
                                                                        Rules</a>
                                                                    <div class="slide"></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-12 text-right">
                                                                <a class="btn btn-primary float-right"
                                                                   href="{{ route('rules.create') }}">Add Rule</a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px active" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="A">Part A</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="B">Part B</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="C">Part C</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="D">Part D</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="E">Part E</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="F">Part F</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item mw-10 font-weight-bold">
                                                                        <a class="nav-link fz-18px" id="tab-"
                                                                           data-toggle="tab" href="#content-" role="tab"
                                                                           data-part="G">Part G</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div class="tab-pane show {{ request()->is('rules') ? 'active' : '' }}" id="content-rules" role="tabpanel">
                                                                        <div class="row mt-3">
                                                                            <div class="col-12">
                                                                                <div class="table-responsive" id="table-content-rules">
                                                                                    <table class="table table-hover">
                                                                                        <tbody>
                                                                                        <!-- Placeholder for rows generated from response -->
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="content"
                                                                         role="tabpanel">
                                                                    </div>
                                                                    <!-- Add this modal structure to your HTML -->
                                                                    <div class="modal fade" id="ruleModal" tabindex="-1" role="dialog" aria-labelledby="ruleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="ruleModalLabel"></h5>
                                                                                    <h5 class="text-right">Your Content Here</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body" id="ruleModalBody">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div class="col-sm-12">
                                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascripts')
    <script>
        $(document).ready(function () {
            loadTabData('A');
        });

        $(document).on('click', '[id^="tab-"]', function () {
            var part = $(this).attr('data-part');
            loadTabData(part);
        });

        function loadTabData(part) {
            $.ajax({
                url: '{{ route("get-part-data") }}',
                method: 'GET',
                data: { part: part },
                success: function (response) {
                    handleAjaxSuccess(response.data);
                    // $('[id^="tab-"]').removeClass('active');
                    $('#tab-' + part).addClass('active');
                    $('[id^="content-"]').removeClass('active-content');
                    $('#content-' + part).addClass('active-content');
                },
                error: function () {
                    console.log('Error loading ' + part + ' data.');
                }
            });
        }
        function handleAjaxSuccess(data) {
            var newRow = '';
            $.each(data, function (index, rule) {
                newRow += '<tr data-toggle="collapse" class="accordion-toggle" data-target="#demo' + rule.id + '" data-id="' + rule.id + '">';
                newRow += '<td>' + rule.rule_id + '</td>';
                newRow += '<td>' + rule.rule + '</td>';
                newRow += '<td>' + rule.total_points + '</td>';
                newRow += '<td> <a class="editRule" href="{{ route('rules.edit', '') }}/' + rule.id + '" data-id="' + rule.rule_id + '"><i class="fas fa-edit"></i></a> </td>';
                newRow += '</tr>';
                newRow += '<tr class="test">';
                newRow += '<td colspan="4" class="hiddenRow"></td>';
                newRow += '</tr>';
                newRow += '<tr class="accordion-content-row" style="display: none;">'; // Add this line
                newRow += '<td colspan="4" class="accordion-content-td"></td>';
                newRow += '</tr>';
            });
            $('#table-content-rules tbody').html(newRow);
        }

        $(document).on('click', '.accordion-toggle', function () {
            var ruleId = $(this).attr('data-id');
            $.ajax({
                url: '{{ route('getAccordionContent') }}',
                method: 'GET',
                data: { ruleId: ruleId },
                success: function (response) {
                    $('#ruleModalBody').html(response.formHtml);
                    $('.modal-title').text()
                    $('#ruleModal').modal('show');
                    var modalTitle = $('.modal-title');
                    modalTitle.text(response.rule);
                },
                error: function () {
                    console.log('Error loading rule details.');
                }
            });
        });
    </script>
@endpush
