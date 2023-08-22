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