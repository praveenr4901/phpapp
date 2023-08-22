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
                                                <div class="row ">
                                                    <div class="col-lg-12 col-md-12 col-xl-12">
                                                     <!-- Nav tabs -->
                                                     @include('admin.includes.reportMenu')
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <div class="row ">
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
                                                                            <td>1</td>
                                                                            <td>A-1</td>
                                                                            <td>Creating Username password by PST before
                                                                                15 July 2022 for login to international
                                                                                website</td>
                                                                            <td>3</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>A-2.1</td>
                                                                            <td>(a) Installing District App</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>A-2.1.1</td>
                                                                            <td>By 50% members</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
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
                                                                        <tr>
                                                                            <td>47</td>
                                                                            <td>C-1</td>
                                                                            <td>Members participating in Montreal
                                                                                Convention</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>48</td>
                                                                            <td>C-2</td>
                                                                            <td>Participation in functions organized at
                                                                                District level(10 points per participant
                                                                                subject to a maximum of 6 per event) Any
                                                                                15 programmes</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>49</td>
                                                                            <td>C-2.1</td>
                                                                            <td>1. Doctor's Day (1st July)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>50</td>
                                                                            <td>C-2.2</td>
                                                                            <td>2. Onam &amp; Ramzan (8th Sep)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>51</td>
                                                                            <td>C-2.3</td>
                                                                            <td>3. World Engineers Day (15th Sep)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>52</td>
                                                                            <td>C-2.4</td>
                                                                            <td>4. World Elder's Day (1st Oct)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>53</td>
                                                                            <td>C-2.5</td>
                                                                            <td>5. World Sight Day (13th Oct)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>54</td>
                                                                            <td>C-2.6</td>
                                                                            <td>6. White Cane safety Day (15th Oct)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>55</td>
                                                                            <td>C-2.7</td>
                                                                            <td>7. UN Day (24th Oct)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>56</td>
                                                                            <td>C-2.8</td>
                                                                            <td>8. Kerala Piravi (1st Nov)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>57</td>
                                                                            <td>C-2.9</td>
                                                                            <td>9. World Ayurvedic Day (2nd Nov)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>58</td>
                                                                            <td>C-2.10</td>
                                                                            <td>10. International LEO Day (5th Dec)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>59</td>
                                                                            <td>C-2.11</td>
                                                                            <td>11. World Diabetic Day (14th Nov)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>60</td>
                                                                            <td>C-2.12</td>
                                                                            <td>12. Special Sports (27th Nov)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>61</td>
                                                                            <td>C-2.13</td>
                                                                            <td>13. Human Rights Day (10th Dec) </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>62</td>
                                                                            <td>C-2.14</td>
                                                                            <td>14. Special Arts </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>63</td>
                                                                            <td>C-2.15</td>
                                                                            <td>15. Christmas&amp; New Year (8th Jan)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>64</td>
                                                                            <td>C-2.16</td>
                                                                            <td>16. LCIF, Founder's Day &amp; Honouring
                                                                                of MJFs (13th Jan)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>65</td>
                                                                            <td>C-2.17</td>
                                                                            <td>17. World Cancer Day (4th Feb)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>66</td>
                                                                            <td>C-2.18</td>
                                                                            <td>18. Honouring of Past District Governors
                                                                                (19th Feb)</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>67</td>
                                                                            <td>C-2.19</td>
                                                                            <td>19. Special cultural Programme</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>68</td>
                                                                            <td>C-2.20</td>
                                                                            <td>20. World Homeopathic Day (10th April)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>69</td>
                                                                            <td>C-2.21</td>
                                                                            <td>21. World Environment day (5th June)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>70</td>
                                                                            <td>C-3</td>
                                                                            <td>Participation in PST Seminar </td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>71</td>
                                                                            <td>C-4</td>
                                                                            <td>President's Participation in President's
                                                                                Academy (Residential)</td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>72</td>
                                                                            <td>C-5</td>
                                                                            <td>PST participation in IT workshop at
                                                                                Region level</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>73</td>
                                                                            <td>C-6</td>
                                                                            <td>District Cabinet Installation </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>74</td>
                                                                            <td>C-6.1</td>
                                                                            <td>(a) Participation by PST,Lions, Leos
                                                                                30/participant</td>
                                                                            <td>1</td>
                                                                            <td>180</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>75</td>
                                                                            <td>C-6.2</td>
                                                                            <td>(b) Bonus for Advance Registration
                                                                                before 11th July, 2022. 10/participant
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>76</td>
                                                                            <td>C-7</td>
                                                                            <td>Participation in DG's Review meeting at
                                                                                Regional level by PST</td>
                                                                            <td>1</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>77</td>
                                                                            <td>C-8</td>
                                                                            <td>District Convention</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>78</td>
                                                                            <td>C-8.1</td>
                                                                            <td>(a) Participation by PST, Lions &amp;
                                                                                Leos 20/participant</td>
                                                                            <td>1</td>
                                                                            <td>120</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>79</td>
                                                                            <td>C-8.2</td>
                                                                            <td>(b) Bonus for Advance Registration
                                                                                before 22nd April, 2023. 10/participant
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>80</td>
                                                                            <td>C-9</td>
                                                                            <td>Multiple Convention- Participation by
                                                                                Lions/Leos 10/participant </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>81</td>
                                                                            <td>D-1</td>
                                                                            <td>Participation of PST &amp; First VP in
                                                                                Pre-Zone/Pre-Region meeting</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>82</td>
                                                                            <td>D-2</td>
                                                                            <td>Participation of PST &amp; IVP in Zone
                                                                                Advisory meeting - 3 Nos.</td>
                                                                            <td>3</td>
                                                                            <td>120</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>83</td>
                                                                            <td>D-3</td>
                                                                            <td>Participation by Lions/New Voice member
                                                                                in Zone meetings - 3 meetings
                                                                                10/participant </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>84</td>
                                                                            <td>D-3.1</td>
                                                                            <td>1st Zone before 30th September 2022</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>85</td>
                                                                            <td>D-3.2</td>
                                                                            <td> 2nd before 31st December 2022</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>86</td>
                                                                            <td>D-3.3</td>
                                                                            <td>3rd before 31st March 2023</td>
                                                                            <td>1</td>
                                                                            <td>80</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>87</td>
                                                                            <td>D-4</td>
                                                                            <td>Region Conference To be held before 31st
                                                                                March 2023 10/participant </td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
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
                                                                        <tr>
                                                                            <td>146</td>
                                                                            <td>G-1</td>
                                                                            <td>Youth Exchange</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>147</td>
                                                                            <td>G-1.1</td>
                                                                            <td>For sponsoring one international student
                                                                                visiting our district as part of youth
                                                                                exchange</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>148</td>
                                                                            <td>G-2</td>
                                                                            <td>Skill development &amp; placement
                                                                                program</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>149</td>
                                                                            <td>G-2.1</td>
                                                                            <td>Sponsoring one student with Rs.6000 for
                                                                                skill development program</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>150</td>
                                                                            <td>G-3</td>
                                                                            <td>Lions Quest</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>151</td>
                                                                            <td>G-3.1</td>
                                                                            <td>(a) Sponsoring Teachers for Teachers
                                                                                Training Workshop (per teacher 5)</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>152</td>
                                                                            <td>G-3.2</td>
                                                                            <td>(b) Ensuring implementation of skills
                                                                                for Adolescence in a school visiting
                                                                                school and reviewing progress</td>
                                                                            <td>1</td>
                                                                            <td>40</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>153</td>
                                                                            <td>G-4</td>
                                                                            <td>Peace Poster Contest</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>154</td>
                                                                            <td>G-4.1</td>
                                                                            <td>(a) Conducting Peace Poster Contest in a
                                                                                School</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>155</td>
                                                                            <td>G-4.2</td>
                                                                            <td>(b) Sponsoring students for District
                                                                                level Peace Poster Contest (per school
                                                                                2)</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>156</td>
                                                                            <td>G-5</td>
                                                                            <td>Cycle Distribution</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>157</td>
                                                                            <td>G-5.1</td>
                                                                            <td>Distribution of cycles to students from
                                                                                area without public transport</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>158</td>
                                                                            <td>G-6</td>
                                                                            <td>Reading Action Programme</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>159</td>
                                                                            <td>G-6.1</td>
                                                                            <td>Implementing RAP in Government/Aided
                                                                                Schools</td>
                                                                            <td>1</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>160</td>
                                                                            <td>G-7</td>
                                                                            <td>Awareness Program for Mental Health
                                                                                &amp; Suicide Prevention</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>161</td>
                                                                            <td>G-8</td>
                                                                            <td>Training on Basic Life Support</td>
                                                                            <td>1</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>162</td>
                                                                            <td>G-9</td>
                                                                            <td>Medical Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>163</td>
                                                                            <td>G-9.1</td>
                                                                            <td>(a) Allopathy Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>164</td>
                                                                            <td>G-9.2</td>
                                                                            <td>(b) Homoeo Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>165</td>
                                                                            <td>G-9.3</td>
                                                                            <td>(c) Ayurveda Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>166</td>
                                                                            <td>G-9.4</td>
                                                                            <td>(d) Dental Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>167</td>
                                                                            <td>G-9.5</td>
                                                                            <td>(e) veternary Medical Camps</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>168</td>
                                                                            <td>G-9.6</td>
                                                                            <td>(f) Medical check up &amp; camps at
                                                                                Police station</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>169</td>
                                                                            <td>G-10</td>
                                                                            <td>Artificial limbs for differently abled
                                                                                persons</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>170</td>
                                                                            <td>G-10.1</td>
                                                                            <td>Sponsoring Artificial limbs/appliances
                                                                                for differently abled persons</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>171</td>
                                                                            <td>G-11</td>
                                                                            <td>Palliative Care</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>172</td>
                                                                            <td>G-11.1</td>
                                                                            <td>Providing aid to terminally ill patients
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>173</td>
                                                                            <td>G-12</td>
                                                                            <td>Blood Donation</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>174</td>
                                                                            <td>G-12.1</td>
                                                                            <td>(a) Donating blood to blood bank ( per
                                                                                unit)</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>175</td>
                                                                            <td>G-12.2</td>
                                                                            <td>(b) Giving list of members to blood
                                                                                donors forum</td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>176</td>
                                                                            <td>G-13</td>
                                                                            <td>Eye Screening Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>177</td>
                                                                            <td>G-13.1</td>
                                                                            <td>(a) Conducting an Eye screening Camp for
                                                                                identifying cataract patients</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>178</td>
                                                                            <td>G-13.2</td>
                                                                            <td>(b) If minimum 100 patients attend a
                                                                                screening camp</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>179</td>
                                                                            <td>G-13.3</td>
                                                                            <td>(c) For every 10 cataract sureguries
                                                                                completed</td>
                                                                            <td>5</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>180</td>
                                                                            <td>G-14</td>
                                                                            <td>Sight for Kids programme</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>181</td>
                                                                            <td>G-14.1</td>
                                                                            <td>(a) Sponsoring Teachers for Teachers
                                                                                Training workshop(per teacher 2 points)
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>182</td>
                                                                            <td>G-14.2</td>
                                                                            <td>(b) Conducting Vision Screening in
                                                                                Schools (per school 2 points)</td>
                                                                            <td>5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>183</td>
                                                                            <td>G-14.3</td>
                                                                            <td>(c) Conducting Referral Camps (per camp
                                                                                10 points)</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>184</td>
                                                                            <td>G-14.4</td>
                                                                            <td>(d) Distribution of spectacles to needy
                                                                                children</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>185</td>
                                                                            <td>G-15</td>
                                                                            <td>KID's Vision screening program</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>186</td>
                                                                            <td>G-15.1</td>
                                                                            <td>Conducting an Eye screening Camp for
                                                                                children below 6 years using Auto
                                                                                refractory meter</td>
                                                                            <td>2</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>187</td>
                                                                            <td>G-16</td>
                                                                            <td>Arranging Cornea Transplantation</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>188</td>
                                                                            <td>G-16.1</td>
                                                                            <td>For arranging transplantation of one
                                                                                pair of cornea</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>189</td>
                                                                            <td>G-17</td>
                                                                            <td>Diabetic detection Camps</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>190</td>
                                                                            <td>G-17.1</td>
                                                                            <td>(a) Arranging Diabetic detection Camps
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>191</td>
                                                                            <td>G-17.2</td>
                                                                            <td>(b) Conducting awareness seminar</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>192</td>
                                                                            <td>G-18</td>
                                                                            <td>Relieving Hunger</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>193</td>
                                                                            <td>G-18.1</td>
                                                                            <td>(a) Associating with the distribution of
                                                                                Onam Food kits to poor - one member one
                                                                                kit worth Rs. 500/- each through the
                                                                                district</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>194</td>
                                                                            <td>G-18.2</td>
                                                                            <td>(b) Providing groceries to institutions
                                                                                giving shelter to patients (cancer,
                                                                                mentally retarted, etc)</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>195</td>
                                                                            <td>G-18.3</td>
                                                                            <td>(c) Contributing Rs. 6000 for
                                                                                Distribution of noon meal every day at
                                                                                RCC Hospital</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>196</td>
                                                                            <td>G-19</td>
                                                                            <td> Protecting Environment</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>197</td>
                                                                            <td>G-19.1</td>
                                                                            <td>(a) Planting trees in public places with
                                                                                tree guards minimum 5 Nos.</td>
                                                                            <td>3</td>
                                                                            <td>15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>198</td>
                                                                            <td>G-19.2</td>
                                                                            <td>(b) Setting herbal Gardens in schools
                                                                                with botanical names</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>199</td>
                                                                            <td>G-19.3</td>
                                                                            <td>(c) Providing disposable bins in public
                                                                                places (5 point per Bin)</td>
                                                                            <td>4</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>200</td>
                                                                            <td>G-20</td>
                                                                            <td>Childhood Cancer</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>201</td>
                                                                            <td>G-20.1</td>
                                                                            <td>Providing Fincancial Aid of Rs.12000 to
                                                                                a cancer affected child</td>
                                                                            <td>1</td>
                                                                            <td>30</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>202</td>
                                                                            <td>G-21</td>
                                                                            <td>Seminars</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>203</td>
                                                                            <td>G-21.1</td>
                                                                            <td>(a) Diabetic foot care-conducting
                                                                                awareness seminars on diabetic foot care
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>204</td>
                                                                            <td>G-21.2</td>
                                                                            <td>(b) Conducting seminar on cyber safety
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>205</td>
                                                                            <td>G-21.3</td>
                                                                            <td>(c) Conducting seminar on Drug Abuse
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>206</td>
                                                                            <td>G-21.4</td>
                                                                            <td>(d) Conducting seminar on Traffic Rules
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>207</td>
                                                                            <td>G-22</td>
                                                                            <td>Convex Mirror</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>208</td>
                                                                            <td>G-22.1</td>
                                                                            <td>Installing Convex Mirror at blind curves
                                                                            </td>
                                                                            <td>1</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>209</td>
                                                                            <td>G-23</td>
                                                                            <td>Sewing Machine Distribution</td>
                                                                            <td>1</td>
                                                                            <td>20</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>210</td>
                                                                            <td>G-24</td>
                                                                            <td>Umbrella Distribution</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>211</td>
                                                                            <td>G-24.1</td>
                                                                            <td>Distribution of Beach Umbrella for
                                                                                street vendors</td>
                                                                            <td>5</td>
                                                                            <td>25</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>212</td>
                                                                            <td>G-25</td>
                                                                            <td>District Signature Project</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>213</td>
                                                                            <td>G-25.1</td>
                                                                            <td>Donating Rs.10,000 to the signature
                                                                                project of the district</td>
                                                                            <td>10</td>
                                                                            <td>100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>214</td>
                                                                            <td>G-25.2</td>
                                                                            <td>Clubs donating more than 1,00,000 will
                                                                                get a bonus 50 points</td>
                                                                            <td>1</td>
                                                                            <td>50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>215</td>
                                                                            <td>G-26</td>
                                                                            <td>Newspaper clipping of service projects
                                                                                (10 per clipping upto 6 events)</td>
                                                                            <td>6</td>
                                                                            <td>60</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>216</td>
                                                                            <td>G-27</td>
                                                                            <td>Other Projects (Where there is a need,
                                                                                There is a Lion)</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>217</td>
                                                                            <td>G-27.1</td>
                                                                            <td>Clubs are free to do projects as per the
                                                                                need of the society</td>
                                                                            <td>800</td>
                                                                            <td>800</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>218</td>
                                                                            <td>G-28</td>
                                                                            <td>Signature Project Participation </td>
                                                                            <td>1</td>
                                                                            <td>200</td>
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
</div>
<!-- Modal -->
<div class="modal fade" id="member_model" tabindex="-1" role="dialog" aria-labelledby="createMember" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" disabled value="5183901">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="R S  Nandakumar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Home</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="9447065085">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Office</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="9447065085">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">WhatsApp</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="9447065085">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('javascripts')
@endpush