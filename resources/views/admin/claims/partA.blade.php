@extends('layouts.main')

@push('stylesheets')
@endpush

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
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
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
                                                        @include('admin.includes.claimsMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row mt-3">
                                                        <div class="col-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                        <tr data-toggle="collapse"
                                                                            data-target="#rule-A-1"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseExample">
                                                                            <td>1</td>
                                                                            <td>A-1</td>
                                                                            <td>Creating Username password by PST before
                                                                                15 July 2022 for login to international
                                                                                website</td>
                                                                            <td>3 x 60</td>
                                                                        </tr>
                                                                        <tr class="collapse inverse-breadcrumb" id="rule-A-1">
                                                                            <form>
                                                                                <td colspan="4">
                                                                                    <div class="form-group row mb-0 ">
                                                                                        <div class="col-sm-2">
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="checkbox"
                                                                                                    id="gridCheck1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="gridCheck1">
                                                                                                    President
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-2">
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="checkbox"
                                                                                                    id="gridCheck1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="gridCheck1">
                                                                                                    Secretary
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-2">
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="checkbox"
                                                                                                    id="gridCheck1">
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="gridCheck1">
                                                                                                    Treasurer
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </form>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>A-2.1</td>
                                                                            <td>(a) Installing District App</td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr data-toggle="collapse"
                                                                            data-target="#rule-A-2-1-1"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseExample">
                                                                            <td>3</td>
                                                                            <td>A-2.1.1</td>
                                                                            <td>By 50% members</td>
                                                                            <td>1 x 50</td>
                                                                        </tr>
                                                                        <tr class="collapse inverse-breadcrumb" id="rule-A-2-1-1">
                                                                            <form>
                                                                                <td colspan="4">
                                                                                    <div class="form-group row">
                                                                                        <label
                                                                                            class="col-sm-2 col-form-label">Percentage</label>
                                                                                        <div class="col-sm-4">
                                                                                        <div class="input-group">
                                                            
                                                            <input type="number" class="form-control"  title="" data-toggle="tooltip" data-original-title="Enter email"><span class="input-group-prepend" id="name"><label class="input-group-text">%</label></span>
                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </form>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>A-2.1.2</td>
                                                                            <td>By 100% members</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>A-2.2</td>
                                                                            <td>(b) Updating personal details in
                                                                                district app</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>A-2.2.1</td>
                                                                            <td>By 50% members</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>A-2.2.2</td>
                                                                            <td>By 100% members</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>A-3</td>
                                                                            <td>Submission of MMR before last day of the
                                                                                month in MyLCI</td>
                                                                            <td>11</td>
                                                                            <td>110</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>A-4</td>
                                                                            <td>Submission of MAR in international
                                                                                Website before 5th of succeeding month
                                                                            </td>
                                                                            <td>11</td>
                                                                            <td>110</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>A-5</td>
                                                                            <td>Submission of MAR in District Website
                                                                                before 5th of succeeding month</td>
                                                                            <td>11</td>
                                                                            <td>110</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>A-6</td>
                                                                            <td>Preparation &amp; furnishing List of Sub
                                                                                Committees Membership, Project, Program,
                                                                                Finance &amp; Publication On or before
                                                                                15th Aug 2022</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>A-7</td>
                                                                            <td>Confirmation regarding Constitution
                                                                                followed by the club- either own
                                                                                constitution or Standard constitution of
                                                                                International in district website on or
                                                                                before 15th Aug 2022</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>13</td>
                                                                            <td>A-8</td>
                                                                            <td>Preparation &amp; submission of Calendar
                                                                                of events on or before 15th Aug 2022
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>14</td>
                                                                            <td>A-9</td>
                                                                            <td>Maintenance of Club Records - Minutes
                                                                                Book, Attendance Register, Books of
                                                                                Account, Scrap book &amp; Club History
                                                                                to be produced at the time of DG Visit
                                                                            </td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15</td>
                                                                            <td>A-10</td>
                                                                            <td>Publishing Club Bulletin/Newsletter
                                                                                quarterly</td>
                                                                            <td>4</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>16</td>
                                                                            <td>A-11</td>
                                                                            <td>Preparation, Approval by club meeting
                                                                                and submission of budget to District
                                                                                Office before 15th August 2022</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>17</td>
                                                                            <td>A-12</td>
                                                                            <td>Submission of Audited Annual Accounts
                                                                                for 2021-22 to District office before
                                                                                15th August 2022</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>18</td>
                                                                            <td>A-13</td>
                                                                            <td>Furnishing details for next lionistic
                                                                                year</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>19</td>
                                                                            <td>A-13.1</td>
                                                                            <td>a) Submission of office bearers for the
                                                                                year 2023-2024 Form PU 101 before 31st
                                                                                March 2023</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>20</td>
                                                                            <td>A-13.2</td>
                                                                            <td>b) Furnishing Data for District
                                                                                Directory 23-24 before 15th April 2023
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>21</td>
                                                                            <td>A-13.3</td>
                                                                            <td>c) Election of Officer bearers before
                                                                                28th February 2023 and reporting the
                                                                                same with MAR of February 2023</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>

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
    <!-- Modal -->

    @endsection

    @push('stylesheets')
    @endpush
    @push('javascripts')
    @endpush