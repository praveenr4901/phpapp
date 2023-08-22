@extends('layouts.app')

@section('title','landing')

@section('content')
<div class="main_inner_region_wrap">
<header class="main_inner_menu_wrap">
    <div class="container">
    @include('layouts.innerHeader')
    </div>
</header>
</div>
<section class="points_wrap py-5" id="points_wrap">
    <div class="container">
    <div class="row point_row">
        <h1>Points
            <select name="" class="tabSelect">
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>Aug</option>
            </select>
        </h1>
        
<div class="tab-container">
  <button class="tab-button" onclick="openTab(event, 'tab1')">All</button>
  <button class="tab-button" onclick="openTab(event, 'tab2')">Category A</button>
  <button class="tab-button" onclick="openTab(event, 'tab3')">Category B</button>
  <button class="tab-button" onclick="openTab(event, 'tab4')">Category C</button>

  <div id="tab1" class="tab-content">
       <div class="region_tb_wrap">
            <table>
            <tr>
                <th>Region</th>
                <th>ID</th>
                <th>Name</th>
                <th>Club</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            <tbody><tr><td>Region 1 Zone A</td><td>1291213</td><td>M  Basheer</td><td>Murukkumpuzha</td><td>9544728000</td><td>basheer@cleanblast.com</td> </tr><tr role="row" class="odd"><td>Region 1 Zone B</td><td>4817762</td><td>Sreekantan Nair  A </td><td>Trivandrum Smart City</td><td>9946869029</td><td>harisree.construction@yahoo.in</td> </tr><tr><td>Region 2 Zone A</td><td>4893250</td><td>Sam Joseph</td><td>Trivandrum Cosmopolitan</td><td>9846004242</td><td>sammon_9@yahoo.com</td> </tr><tr role="row" class="odd"><td>Region 2 Zone B</td><td>5141843</td><td>SUNIL KUMAR M.</td><td>Trivandrum Noble</td><td>9447654041</td><td>sunilkumarmnair5@gmail.com</td> </tr><tr><td>Region 3 Zone A</td><td>5133344</td><td>HARI KUMAR S</td><td>Thiruvananthapuram South</td><td>9446096733</td><td>hariattukal.abi@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 3 Zone B</td><td>4918407</td><td>Sunilkumar  P</td><td>Trivandrum Gems</td><td>9400590429</td><td>sunilp.75@gmail.com</td> </tr><tr><td>Region 4 Zone A</td><td>4916482</td><td>Anilkumar  S</td><td>Trivandrum Thirumala</td><td>9447343314</td><td>anilsadasivannair@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 4 Zone B</td><td>4673591</td><td>Suresh Chandran </td><td>Trivandrum Royal</td><td>9446484329</td><td>msureshchandran@yahoo.com</td> </tr><tr><td>Region 5 Zone A</td><td>1216219</td><td>K P Ayyappan</td><td>Nedumangad</td><td>9447439715</td><td>kpayyappan@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 5 Zone B</td><td>4705149</td><td>C V  Hari</td><td>Trivandrum East</td><td>9345759622</td><td>haricv2018@gmail.com</td> </tr><tr><td>Region 6 Zone A</td><td>3842863</td><td>Ratheesh Kumar  R V</td><td>Trivandrum Poojappura</td><td>9020077770</td><td>ratheeshoxy@yahoo.co.in</td> </tr><tr role="row" class="odd"><td>Region 6 Zone B</td><td>5280657</td><td>Vinod Kumar S</td><td>Trivandrum Heritage</td><td>9387737848</td><td>commandsecurities2017@gmail.com</td> </tr><tr><td>Region 7 Zone A</td><td>3080047</td><td>S S Thampi</td><td>Trivandrum Ananthapuri</td><td>9447031270</td><td>ssthampi8412@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 7 Zone B</td><td>4815398</td><td>SANTHOSH KUMAR C.F.</td><td>Trivandrum Kowdiar</td><td>9447142545</td><td>cfsanthosh@yahoo.co.in</td> </tr><tr><td>Region 8 Zone A</td><td>3048816</td><td>Suresh Kumar  M </td><td>Trivandrum Impact</td><td>9387813708</td><td>lmoac445529@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 8 Zone B</td><td>4415965</td><td>Geetha Madhusoodanan</td><td>Trivandrum Rajadhani</td><td>9447500919</td><td>geethmadhu24@gmail.com</td> </tr><tr><td>Region 9 Zone A</td><td>4414349</td><td>Nizam Sait  E</td><td>Vizhinjam</td><td>8547809690</td><td>nizamsait@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 9 Zone B</td><td>4687097</td><td>Anilkumar &nbsp;e &nbsp;</td><td>Kovalam Raymond</td><td>9447081138</td><td>anileaswar@gmail.com</td> </tr><tr><td>Region 10 Zone A</td><td>3611381</td><td>S  Premjith</td><td>Attingal</td><td>9847240328</td><td>merpdr@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 10 Zone B</td><td>4887767</td><td>Aji Kumar K  V</td><td>Kallara</td><td>8129545366</td><td>ajianupam@gmail.com</td> </tr><tr><td>Region 11 Zone A</td><td>4702619</td><td>V.G NAIR</td><td>Paravur</td><td>9447081411</td><td>nairvg69@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 11 Zone B</td><td>621515</td><td>Salim  M K</td><td>Parippally</td><td>9847312035</td><td>safasalim53@gmail.com</td> </tr><tr><td>Region 12 Zone A</td><td>3680017</td><td>AJI VARGHESE</td><td>Kottarakara</td><td>9495431269</td><td>ajikaanavil@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 12 Zone B</td><td>4180517</td><td>PRASAD. G</td><td>Ayur</td><td>9447333403</td><td>prasadvellilazhikam@gmail.com</td> </tr><tr><td>Region 13 Zone A</td><td>1448844</td><td>C  Radhakrishnan Pillai</td><td>Anchal</td><td>9207535925</td><td>pillai.rc56@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 13 Zone B</td><td>2899047</td><td>Salim  S A</td><td>Punalur Greater</td><td>9446334076</td><td>drsalimsa@gmail.com</td> </tr><tr><td>Region 14 Zone A</td><td>4643965</td><td>Abida Beevi Nazimudeen</td><td>Oyoor Town</td><td>6282696096</td><td>nazimuddinsali@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 14 Zone B</td><td>3360422</td><td>Radhamany Gurudas</td><td>Anchal Town</td><td>9496149499</td><td>nanugurdas@gmail.com</td> </tr><tr><td>Region 15 Zone A</td><td>5494318</td><td>Sindhu Saji Sujilee</td><td>Quilon Roses</td><td> 9495347893</td><td>sindhusujilee@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 15 Zone B</td><td>4216825</td><td>Koshy George</td><td>Kundara Royals</td><td>9847368923</td><td>roykundara@gmail.com</td> </tr><tr><td>Region 16 Zone A</td><td>3119646</td><td>PRADEEP A.B</td><td>Karunagappally</td><td>9447279783</td><td>roshehomeo@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 16 Zone B</td><td>3824018</td><td>Vasudevan Pillai  P </td><td>Karunagapally Royal</td><td>9847287446</td><td>mailto:drpvpillai@gmail.com</td> </tr><tr><td>Region 16 Zone C</td><td>4148097</td><td>BRIJESH. S NATH</td><td>Chavara</td><td>9447429916</td><td>brijeshaneppil@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 17 Zone A</td><td>4478154</td><td> Parvathy Premkumar</td><td>Ochira</td><td>9447316774</td><td>parvathipremkumar@gmail.com</td> </tr><tr><td>Region 17 Zone B</td><td>4226504</td><td>Abdul Rahim</td><td>Krishnapuram Palace</td><td>9142375606</td><td>abdulrahim.kylm@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 18 Zone A</td><td>5170841</td><td>Preethi S Mithun</td><td>Kayamkulam</td><td>8129837924</td><td></td> </tr><tr><td>Region 18 Zone B</td><td>973847</td><td>Subash  C</td><td>Haripad</td><td>9447482052</td><td>csubash2052@gmail.com</td> </tr> </tbody>
            </table>
        </div>
  </div>

  <div id="tab2" class="tab-content">
    
        <div class="region_tb_wrap">
            <table>
            <tr>
                <th>Region</th>
                <th>ID</th>
                <th>Name</th>
                <th>Club</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            </table>
        </div> 
  </div>

  <div id="tab3" class="tab-content">
        <div class="region_tb_wrap">
            <table>
            <tr>
                <th>Region</th>
                <th>ID</th>
                <th>Name</th>
                <th>Club</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            </table>
        </div> 
  </div>
  <div id="tab4" class="tab-content">
        <div class="region_tb_wrap">
            <table>
            <tr>
                <th>Region</th>
                <th>ID</th>
                <th>Name</th>
                <th>Club</th>
                <th>Mobile</th>
                <th>Email</th>
            </tr>
            </table>
        </div> 
  </div>

</div>

    </div>
    </div>
</section>   
@endsection

@push('stylesheets')
<link rel="stylesheet" href="{{ asset('assets/css/inner.css')}}">
@endpush
@push('javascripts')
@endpush