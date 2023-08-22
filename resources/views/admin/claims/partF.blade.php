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
                                                                            <td>121</td>
                                                                            <td>F-1</td>
                                                                            <td>Payment of International dues</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>122</td>
                                                                            <td>F-1.1</td>
                                                                            <td>(a) First semi annual dues before 15th
                                                                                September 2022 @$ 21.50 per member</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>123</td>
                                                                            <td>F-1.2</td>
                                                                            <td>(b) Second semi annual dues before 15th
                                                                                February 2023 @ $ 21.50 per member</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>124</td>
                                                                            <td>F-1.3</td>
                                                                            <td>(c) Bonus Point For full Annual
                                                                                International Dues on or before 15th
                                                                                September 2022</td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>125</td>
                                                                            <td>F-2</td>
                                                                            <td>Payment of Multiple District dues @ Rs.
                                                                                51/- per member &amp; Rs 38 per family
                                                                                member</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>126</td>
                                                                            <td>F-3</td>
                                                                            <td>Payment of Annual District dues (Note :
                                                                                Payment to be made by online transaction
                                                                                at www.lionsdistrict318a.com)</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>127</td>
                                                                            <td>F-3.1</td>
                                                                            <td>(a)First semi annual dues before 15th
                                                                                September 2022 @ Rs. 275/- per member
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>128</td>
                                                                            <td>F-3.2</td>
                                                                            <td>(b) Second semi annual dues before 15th
                                                                                February 2023 @ Rs. 275/- per member
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>129</td>
                                                                            <td>F-3.3</td>
                                                                            <td>(c) Bonus Point For full Annual District
                                                                                Dues on or before 15th September 2022
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>130</td>
                                                                            <td>F-4</td>
                                                                            <td>Contribution to Lion Bhavan or Lions
                                                                                School @ Rs.100/each per member</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>131</td>
                                                                            <td>F-5</td>
                                                                            <td>For taking membership in LFSS during
                                                                                2022-23 (10 per membership)</td>
                                                                            <td>25</td>
                                                                            <td>250</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>132</td>
                                                                            <td>F-6</td>
                                                                            <td>Contribution to LCIF</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>133</td>
                                                                            <td>F-6.1</td>
                                                                            <td>(a) For enrolling one MJF/PMJF
                                                                                contributing US $ 1000</td>
                                                                            <td>5</td>
                                                                            <td>500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>134</td>
                                                                            <td>F-6.2</td>
                                                                            <td>(b) Bonus Points if the Club becomes a
                                                                                Model Club by making minimum per member
                                                                                average contribution (PMA) of US $ 500
                                                                                in donations by 30th May 2023. The PMA
                                                                                includes Fund Raised since July 2018.
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>135</td>
                                                                            <td>F-6.3</td>
                                                                            <td>(c) Participating in The Lions Share
                                                                                Programme by contributing Rupee
                                                                                equivalent of US $ 50x4 = US $ 200 or US
                                                                                $ 100 x 2 =US $ 200 or US $ 200 x1
                                                                                =US$200 in favour of Lions Clubs
                                                                                International Foundation India
                                                                                tobecome1star,2star or 3star Lions Share
                                                                                Supporter/s</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>136</td>
                                                                            <td>F-6.4</td>
                                                                            <td>(d) For contribution @ US$1 per member
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>137</td>
                                                                            <td>F-7</td>
                                                                            <td>District Directory</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>138</td>
                                                                            <td>F-7.1</td>
                                                                            <td>For contribution by clubs to District
                                                                                Directory at the following
                                                                                rates(membership as on 1st July 2022)
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>139</td>
                                                                            <td>F-7.1.1</td>
                                                                            <td>(a) Clubs up to 20 members Rs.4000/-
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>140</td>
                                                                            <td>F-7.1.2</td>
                                                                            <td>(b) Clubs with 21 members to 30
                                                                                Rs.5000/-</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>141</td>
                                                                            <td>F-7.1.3</td>
                                                                            <td>(c) Clubs with 31 members to 40
                                                                                Rs.6000/-</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>142</td>
                                                                            <td>F-7.1.4</td>
                                                                            <td>(d) Clubs with 41 members to 60
                                                                                Rs.7000/-</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>143</td>
                                                                            <td>F-7.1.5</td>
                                                                            <td>(e) Clubs with 61 members and above
                                                                                Rs.8000/-</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>144</td>
                                                                            <td>F-7.2</td>
                                                                            <td>(b) Bonus for Payment before 25th July
                                                                                2022</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>145</td>
                                                                            <td>F-8</td>
                                                                            <td>Enrolment in Annual Registration Scheme
                                                                                for District Functions by members other
                                                                                than Cabinet members@Rs.5000/member.
                                                                            </td>
                                                                            <td>10</td>
                                                                            <td>300</td>
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