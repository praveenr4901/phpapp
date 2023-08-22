@extends('layouts.app')

@push('stylesheets')
@endpush

@section('title','claims - months')

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
                                                    @include('layouts.reportMenu')

                                                    <div class="row">
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'A']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'A') active @endif">Part
                                                                    A</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'B']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'B') active @endif">Part
                                                                    B</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'C']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'C') active @endif">Part
                                                                    C</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'D']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'D') active @endif">Part
                                                                    D</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'E']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'E') active @endif">Part
                                                                    E</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'F']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'F') active @endif">Part
                                                                    F</a>
                                                                <a href="{{ route('report.claims_rule', ['id' => $id, 'part' => 'G']) }}"
                                                                   class="btn btn-primary waves-effect waves-light @if($part == 'G') active @endif">Part
                                                                    G</a>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-hover">
                                                                        <tbody>
                                                                        @foreach($rules as $rule)
                                                                            @php
                                                                                $class = ''; // Default class
                                                                                if(isset($claimIactive[$rule->id])) {
                                                                                    if($claimIactive[$rule->id] == 1) {
                                                                                        $class = 'claimed';
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                            <tr class="background-selected {{$class}}"
                                                                                data-id="{{$rule->id}}">
                                                                                <td>{{$rule->rule_id}}</td>
                                                                                <td>{{$rule->rule}}</td>
                                                                                <td>{{$rule->total_points}}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>
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
        <div class="modal fade" id="ruleModal" tabindex="-1" role="dialog" aria-labelledby="ruleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ruleModalLabel"></h5>
                        <span class="total-points ml-auto" style="color: green"></span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('report.addClaim') }}" method="POST">
                        @csrf
                        <input type="hidden" name="month_id" value="{{$id}}">
                        <input type="hidden" name="rule_id" id="ruleId" value="">
                        <input type="hidden" name="member_id" value="{{Auth::user()->member_id}}">
                        <input type="hidden" name="club_id" id="club_id" value="{{Auth::user()->member->club->clubid}}">
                        <input type="hidden" name="year_id" value="{{$yearId}}">
                        <div class="modal-body" id="ruleModalBody">
                            <!-- Rule details will be displayed here -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="saveButton" name="sns" value="1">Save
                            </button>
                            <button type="submit" class="btn btn-primary" id="submitButton" name="submit" value="1">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('javascripts')
    <script>
        $(document).ready(function () {
            $(document).on("click", ".background-selected ", function () {
                var ruleId = $(this).data("id");
                var clubId = $('#club_id').val();
                var isInactive = $(this).hasClass("claimed");
                if (isInactive) {
                    $(".total-points").text("");
                    $("#ruleId").val("");
                    $("#ruleModalBody").html("<h5>This rule has been claimed already.</h5>");
                    $("#ruleModal").modal("show");
                    $("#saveButton").addClass("d-none");
                    $("#submitButton").addClass("d-none");
                } else {
                    $.ajax({
                        url: "{{ route('report.rulesPopup') }}",
                        data: {
                            ruleId: ruleId,
                            clubId: clubId
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            var formHtml = response.formHtml;
                            var rule = response.rule;
                            var totalPoints = response.points;
                            $("#ruleModalLabel").text(rule);
                            $(".total-points").text("Total Points: " + totalPoints);
                            $("#ruleId").val(ruleId);
                            $("#ruleModalBody").html(formHtml);
                            $("#ruleModal").modal("show");
                        },
                        error: function (error) {
                            console.log("Error fetching rule details:", error);
                        }
                    });
                }
            });
        });

    </script>
@endpush
