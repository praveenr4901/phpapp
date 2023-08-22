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
                                                                        <tr>
                                                                            <th>S/N</th>
                                                                            <th>ID</th>
                                                                            <th>Rule</th>
                                                                            <th>Claim Count</th>
                                                                            <th>Total Points</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        
                                                                        <tr>
                                                                            <td>88</td>
                                                                            <td>E-1</td>
                                                                            <td>Members participating in LIFE (Lions In
                                                                                Family Entertainment) 20/participant
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>89</td>
                                                                            <td>E-2</td>
                                                                            <td>Conducting a family tour</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>90</td>
                                                                            <td>E-3</td>
                                                                            <td>Lions Arts 10 per member</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>91</td>
                                                                            <td>E-4</td>
                                                                            <td>Lions In Sports Participation</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>92</td>
                                                                            <td>E-4.1</td>
                                                                            <td>(a) Rummy competition</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>93</td>
                                                                            <td>E-4.2</td>
                                                                            <td>(b) Shuttle competition</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>94</td>
                                                                            <td>E-4.3</td>
                                                                            <td>(c) Cricket Competition</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>95</td>
                                                                            <td>E-4.4</td>
                                                                            <td>(d) Table Tennis Competition</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>96</td>
                                                                            <td>E-4.5</td>
                                                                            <td>(e) Atheletics</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>97</td>
                                                                            <td>E-5</td>
                                                                            <td>STRENGTHENING THE CLUB</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>98</td>
                                                                            <td>E-5.1</td>
                                                                            <td>(a) Membership Growth - for Net growth
                                                                                in membership (10 points per net growth)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>99</td>
                                                                            <td>E-5.2</td>
                                                                            <td>(b) Formation of a New Lions Club</td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>100</td>
                                                                            <td>E-5.3</td>
                                                                            <td>(c) Payment of one year complete
                                                                                international dues during the formation
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>101</td>
                                                                            <td>E-6</td>
                                                                            <td>For opening a website for the club or
                                                                                web page in club house or facebook page
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>102</td>
                                                                            <td>E-7.1</td>
                                                                            <td>(a) Appointing New Voice officers for
                                                                                Leadership, Membership, Service &amp;
                                                                                Marketing from Lion Ladies</td>
                                                                            <td>4</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>103</td>
                                                                            <td>E-7.2</td>
                                                                            <td>(b) Participation of Lady Lions in New
                                                                                Voice meet</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>104</td>
                                                                            <td>E-8.1</td>
                                                                            <td>(a) Starting a new Leo club</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>105</td>
                                                                            <td>E-8.2</td>
                                                                            <td>(b) Maintaining a Leo club</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>106</td>
                                                                            <td>E-8.3</td>
                                                                            <td>(c) Sponsoring Leos for Annual Leo
                                                                                Meet/Leo Fest/Leadership Programme
                                                                                10/participant</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>107</td>
                                                                            <td>E-9</td>
                                                                            <td>Orientation Seminar</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>108</td>
                                                                            <td>E-9.1</td>
                                                                            <td>(a) For new member orientation seminar-
                                                                                participation of MCC &amp; New members
                                                                                10/participant </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>109</td>
                                                                            <td>E-9.2</td>
                                                                            <td>(b) Orientation seminar - at including
                                                                                PST 10/participant (Old members)</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>110</td>
                                                                            <td>E-10</td>
                                                                            <td>Major Fund Raising Activity Net fund
                                                                                raised through the activity, aggregating
                                                                                to Rs. 1,000/- per member as on 1st July
                                                                                2022 </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>111</td>
                                                                            <td>E-11</td>
                                                                            <td>Observance/celebration of events - club
                                                                                level</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>112</td>
                                                                            <td>E-11.1</td>
                                                                            <td>(a) Charter Anniversary</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>113</td>
                                                                            <td>E-11.2</td>
                                                                            <td>(b) Teacher's Day</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>114</td>
                                                                            <td>E-11.3</td>
                                                                            <td>(c) Independence day</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>115</td>
                                                                            <td>E-11.4</td>
                                                                            <td>(d) Gandhi Jayanthi</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>116</td>
                                                                            <td>E-11.5</td>
                                                                            <td>(e) World Service Day</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>117</td>
                                                                            <td>E-11.6</td>
                                                                            <td>(f) Children's Day</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>118</td>
                                                                            <td>E-12</td>
                                                                            <td>Conducting Inter club meeting with a
                                                                                club outside the district (twinning)
                                                                            </td>
                                                                            <td>11</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>119</td>
                                                                            <td>E-13</td>
                                                                            <td>Inviting a non lion friend to the
                                                                                service project </td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>120</td>
                                                                            <td>E-14</td>
                                                                            <td>Conducting Club Quality Initiative (CQI)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
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