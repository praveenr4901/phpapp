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
<section class="regionChair_wrap py-5" id="regionChair_wrap">
    <div class="container">
    <div class="row">
        <h1>Region Chairpersons</h1>
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
            <tbody><tr><td>Region 1</td><td>3783218</td><td>Murukan  E</td><td>Trivandrum National</td><td>9447153214</td><td>murukan_99@yahoo.com</td> </tr><tr role="row" class="odd"><td>Region 2</td><td>4595113</td><td>Santhosh Jacob</td><td>Trivandrum Cosmopolitan</td><td>9847105985</td><td>sjacob1970@gmail.com</td> </tr><tr><td>Region 3</td><td>3134105</td><td>Kalavathi  M</td><td>Vattiyoorkavu</td><td>9745588904</td><td>bssureshkumar2010@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 4</td><td>3625858</td><td>Sreekumaran Nair  K</td><td>Trivandrum Crystal</td><td>9447411606</td><td>sbsreekumar@rediffmail.com</td> </tr><tr><td>Region 5</td><td>4925236</td><td>Radhakrishnan  R</td><td>Trivandrum North</td><td>8921503502</td><td>rkrag2316@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 6</td><td>4197007</td><td>Rajesh J  Nair</td><td>Trivandrum Poojappura</td><td>9446904721</td><td>safecitytvm@gmail.com</td> </tr><tr><td>Region 7</td><td>4564269</td><td>Ajai Chandra  R</td><td>Trivandrum Nova</td><td>9447388144</td><td>ajaichandra@hotmail.com</td> </tr><tr role="row" class="odd"><td>Region 8</td><td>4200101</td><td>Rajesh Soman</td><td>Trivandrum Greencity</td><td>9446462999</td><td>greentechrec@gmail.com</td> </tr><tr><td>Region 9</td><td>5183901</td><td>R S  Nandakumar</td><td>Venganoor Elites</td><td>9447065085</td><td>nandanrs99@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 10</td><td>534390</td><td>B  Anil Kumar </td><td>Attingal</td><td>9447428481</td><td>anilkumaramy@yahoo.co.in </td> </tr><tr><td>Region 11</td><td>3996861</td><td>K S Deepu</td><td>Trivandrum Towers</td><td>9447464667</td><td>deepuksdeepu@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 12</td><td>2968571</td><td>Biju  T B</td><td>Kottarakara</td><td>9447050534</td><td>bijutb@gmail.com</td> </tr><tr><td>Region 13</td><td>3427527</td><td>THOMAS. M.B</td><td>Anchal</td><td>8547514142</td><td>thomasmb123@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 14</td><td>4678870</td><td>K Mony</td><td>Oyoor Town</td><td>9447035888</td><td></td> </tr><tr><td>Region 15</td><td>3100480</td><td>Venkataraman  A</td><td>Kollam Melvin Jones School</td><td>9605733190</td><td>avenkataraman45@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 16</td><td>4147971</td><td> Shaju Thomas</td><td>Oyoor</td><td>9495697240</td><td>jcshajuthomas@gmail.com</td> </tr><tr><td>Region 17</td><td>2437045</td><td>MOHAN K.G</td><td>Clappana Vallikavu</td><td>9495119929</td><td>dr.kgmohan@gmail.com</td> </tr><tr role="row" class="odd"><td>Region 18</td><td>2403996</td><td>Patric Jose</td><td>Kayamkulam</td><td>9447167557</td><td>josepatt@gmail.com</td> </tr> </tbody>
            </table>
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