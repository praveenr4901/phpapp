@extends('layouts.app')

@section('title','home')

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
                        @include('layouts.pageHeader')
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div class="card-block clubs">
                                                    <div class="row">
                                                        <div class="col-sm-8 mx-auto">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5>Create Rules</h5>
                                                                </div>
                                                                <div class="card-block">
                                                                    <form method="POST" action="{{ route('rules.update') }}">
                                                                        @csrf                                                                        <div class="form-group row">
                                                                            <input type="hidden" name="rule_id" value="{{$rule->id}}">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Part</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control inputTypeDropdown" name="part"
                                                                                    id="partSelect">
                                                                                    <option value="">Select a Part
                                                                                    </option>
                                                                                    <option {{$rule->part == 'A' ? 'selected' : ''}} value="A">Part A</option>
                                                                                    <option {{$rule->part == 'B' ? 'selected' : ''}} value="B">Part B</option>
                                                                                    <option {{$rule->part == 'C' ? 'selected' : ''}} value="C">Part C</option>
                                                                                    <option {{$rule->part == 'D' ? 'selected' : ''}} value="D">Part D</option>
                                                                                    <option {{$rule->part == 'E' ? 'selected' : ''}} value="E">Part E</option>
                                                                                    <option {{$rule->part == 'F' ? 'selected' : ''}} value="F">Part F</option>
                                                                                    <option {{$rule->part == 'G' ? 'selected' : ''}} value="G">Part G</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Rule
                                                                                ID</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="ruleId"
                                                                                       id="ruleID"
                                                                                       placeholder="Enter the rule id with part name"
                                                                                       value="{{$rule->rule_id}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Rule</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control"name="rule"
                                                                                       placeholder="Enter the rule details"
                                                                                       value="{{$rule->rule}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Points
                                                                                per field</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="points"
                                                                                       placeholder="Enter the total points for the rule"
                                                                                       value="{{$rule->point}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Total
                                                                                fields</label>
                                                                            @php
                                                                                $trimmedData = trim(substr($rule->total_points, strpos($rule->total_points, 'x') + 1, strpos($rule->total_points, '=') - strpos($rule->total_points, 'x') - 1));
                                                                            @endphp
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control" name="total_fields"
                                                                                       placeholder="Enter The Total Fields"
                                                                                       value="{{$trimmedData}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Total
                                                                                Points</label>
                                                                            @php
                                                                            $totalPoint = $rule->point*$trimmedData;
                                                                            @endphp
                                                                            <div class="col-sm-10">
                                                                                <input type="number" name="total_points"
                                                                                       class="form-control"
                                                                                       placeholder="Enter the partitions"
                                                                                       value="{{$totalPoint}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">First
                                                                                Approval</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control inputTypeDropdown" name="fapproval"
                                                                                    id="input-type">
                                                                                    <option value="">--Select--</option>
                                                                                    @foreach($roles as $role)
                                                                                        <option
                                                                                            value="{{$role->id}}" {{$role->id == $approval->first_approval ? 'selected' : ''}}>{{ucfirst($role->name)}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Second
                                                                                Approval</label>
                                                                            <div class="col-sm-10">
                                                                                <select
                                                                                    class="form-control inputTypeDropdown" name="sapproval"
                                                                                    id="input-type">
                                                                                    <option value="">--Select--</option>
                                                                                    @foreach($roles as $role)
                                                                                        <option
                                                                                            value="{{$role->id}}" {{$role->id == $approval->second_approval ? 'selected' : ''}}>{{ucfirst($role->name)}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Claims</label>
                                                                            <div class="col-sm-10 mt-1">
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                           type="radio" name="claims"
                                                                                           id="monthlyRadio"
                                                                                           value="month" {{$rule->monthly ? 'checked' : ''}} >
                                                                                    <label class="form-check-label"
                                                                                           for="monthlyRadio">Monthly</label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                           type="radio" name="claims"
                                                                                           id="yearlyRadio"
                                                                                           value="year" {{$rule->yearly ? 'checked' : ''}}>
                                                                                    <label class="form-check-label"
                                                                                           for="yearlyRadio">Yearly</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-2 col-form-label">Number of claims</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="number"
                                                                                       class="form-control" name="claimNos"
                                                                                       placeholder="Total number of claims per month/year"
                                                                                       value="{{$rule->no_of_claims}}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Status</label>
                                                                            <div class="col-sm-10 mt-2">
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                           type="radio" name="status"
                                                                                           id="monthlyRadio"
                                                                                           value="1" checked>
                                                                                    <label class="form-check-label"
                                                                                           for="monthlyRadio">Active</label>
                                                                                </div>
                                                                                <div
                                                                                    class="form-check form-check-inline">
                                                                                    <input class="form-check-input"
                                                                                           type="radio" name="status"
                                                                                           id="yearlyRadio"
                                                                                           value="0">
                                                                                    <label class="form-check-label"
                                                                                           for="yearlyRadio">Inactive</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @foreach($inputs as $index => $input)
                                                                            <div id="inputFieldTemplate" style="">
                                                                                <div class="input-field">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Label for Field</label>
                                                                                        <div class="col-sm-9">
                                                                                            <input type="text" name="label[]" class="form-control inputLabel" value="{{$input->label}}" placeholder="Enter Label">
                                                                                        </div>
                                                                                    @if($index > 0)
                                                                                        <div class="col-sm-1">
                                                                                            <i class="ti-close close-icon" style="cursor: pointer;"></i>
                                                                                        </div>
                                                                                        @else
                                                                                            <div class="col-sm-1">
                                                                                                <i class="ti-close close-icon d-none" style="cursor: pointer;"></i>
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-2 col-form-label">Input Type</label>
                                                                                        <div class="col-sm-9">
                                                                                            <select class="form-control inputTypeDropdown" name="inputType[]" id="input-type">
                                                                                                <option value="">Select Input Type</option>
                                                                                                @foreach($type as $row)
                                                                                                    <option value="{{ $row->id }}" {{$row->id == $input->type_id ? 'selected' : ''}}>
                                                                                                        {{ ucfirst($row->type) }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                        <div id="dynamicInputFields"></div>
                                                                        <button type="button"
                                                                                class="btn btn-primary mt-3"
                                                                                id="addInputFieldBtn">Add Input Field
                                                                        </button>
                                                                        <div class="form-group row float-right">
                                                                            <div class="col-sm-12">
                                                                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                                                                <a class="btn btn-primary waves-effect waves-light mt-3"
                                                                                   href="{{ back()->getTargetUrl() }}">Back</a>
                                                                            </div>
                                                                        </div>
                                                                    </form>
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
            $('#addInputFieldBtn').on('click', function () {
                const dynamicInputFieldsContainer = $('#dynamicInputFields');
                const inputFieldTemplate = $('#inputFieldTemplate').clone().removeAttr('id').show();
                $('.close-icon', inputFieldTemplate).removeClass('d-none');
                $('input', inputFieldTemplate).val('');
                $('select', inputFieldTemplate).val('');
                dynamicInputFieldsContainer.append(inputFieldTemplate);
            });

            $(document).on('click', '.close-icon', function () {
                $(this).closest('.input-field').remove();
            });

            $("#partSelect").on("change", function () {
                var selectedPart = $(this).val();
                var ruleIDInput = $("#ruleID");
                if (selectedPart) {
                    ruleIDInput.val(selectedPart + '-');
                } else {
                    ruleIDInput.val("");
                }
            });
            function updateTotalPoints() {
                var pointsPerField = parseFloat($('input[name="points"]').val()) || 0;
                var totalFields = parseInt($('input[name="total_fields"]').val()) || 0;
                var totalPoints = pointsPerField * totalFields;
                $('input[name="total_points"]').val(totalPoints);
            }

            $('input[name="points"], input[name="total_fields"]').on('input', function () {
                updateTotalPoints();
            });
        });
    </script>
@endpush
