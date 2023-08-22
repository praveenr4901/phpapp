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
                                                                            <td>22</td>
                                                                            <td>B-1</td>
                                                                            <td>Installation of office bearers before
                                                                                15th July 2022</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>23</td>
                                                                            <td>B-2</td>
                                                                            <td>General Body meeting of Club -Twice in a
                                                                                month</td>
                                                                            <td>22</td>
                                                                            <td>220</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>24</td>
                                                                            <td>B-3</td>
                                                                            <td>Board Meeting - Monthly</td>
                                                                            <td>11</td>
                                                                            <td>110</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>25</td>
                                                                            <td>B-4</td>
                                                                            <td>Conducting GB at a member's property
                                                                            </td>
                                                                            <td>11</td>
                                                                            <td>110</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>26</td>
                                                                            <td>B-5</td>
                                                                            <td>Holding Visits </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>27</td>
                                                                            <td>B-5.1</td>
                                                                            <td>RC</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>28</td>
                                                                            <td>B-5.2</td>
                                                                            <td>ZC</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>29</td>
                                                                            <td>B-5.3</td>
                                                                            <td>GMT</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>B-5.4</td>
                                                                            <td>GLT</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>31</td>
                                                                            <td>B-5.5</td>
                                                                            <td>GST</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>32</td>
                                                                            <td>B-5.6</td>
                                                                            <td>LCIF</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>33</td>
                                                                            <td>B-6</td>
                                                                            <td>Holding visits of office bearer of LFSS
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>34</td>
                                                                            <td>B-7</td>
                                                                            <td>District Governor's visit</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>35</td>
                                                                            <td>B-7.1</td>
                                                                            <td>(a) for fixing the date before 31st
                                                                                August 2022</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>36</td>
                                                                            <td>B-7.2</td>
                                                                            <td>(b) Getting the agenda approved from the
                                                                                district office one week before the DG
                                                                                visit</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>37</td>
                                                                            <td>B-7.3</td>
                                                                            <td>(c) Starting the DB &amp; GB on time
                                                                            </td>
                                                                            <td>2</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>38</td>
                                                                            <td>B-7.4</td>
                                                                            <td>(d) Attendance of more than 75% of Board
                                                                                Members in the Board of meeting</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>39</td>
                                                                            <td>B-7.5</td>
                                                                            <td>(e) Attendanceof more than 75% of club
                                                                                members in general Body meeting</td>
                                                                            <td>1</td>
                                                                            <td>200</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>40</td>
                                                                            <td>B-8</td>
                                                                            <td>For arranging Vice District Governor's
                                                                                Visit together or separately</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>41</td>
                                                                            <td>B-8.1</td>
                                                                            <td>a) Together</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>42</td>
                                                                            <td>B-8.2</td>
                                                                            <td>b) Seperately</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>43</td>
                                                                            <td>B-8.2.1</td>
                                                                            <td>i) VDG1</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>44</td>
                                                                            <td>B-8.2.2</td>
                                                                            <td>ii) VDG2</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>45</td>
                                                                            <td>B-9</td>
                                                                            <td>Inviting Past District Governors to the
                                                                                Club for meetings or projects</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>46</td>
                                                                            <td>B-10</td>
                                                                            <td>Conducting one club meeting at Lions
                                                                                Bhavan/Lions School</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
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