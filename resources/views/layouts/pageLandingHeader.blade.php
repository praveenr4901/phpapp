

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="assets/images/landing/PinF1.svg">
  <a class="navbar-brand" href="{{ url('/') }}">Lions International <br>District 318A 2023-24</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Our Team
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="dg-team">DG Team</a>
            <a class="dropdown-item " href="district-governor">District Governor</a>
            <a class="dropdown-item " href="international-president">International President</a>
            <a class="dropdown-item " href="coming-soon">International Directors</a>
            <a class="dropdown-item " href="coming-soon">Past District Governors</a>
            <a class="dropdown-item " href="cabinet-nucleus">Cabinet Nucleus</a>
            <!--<a class="dropdown-item " href="cabinet-core">Cabinet Core</a>-->
            <a class="dropdown-item " href="region-chairpersons">Region Chairpersons</a>
            <a class="dropdown-item " href="zone-chairpersons">Zone Chairpersons</a> 
            <a class="dropdown-item " href="coming-soon">District Chairpersons</a>
            <a class="dropdown-item " href="coming-soon">International Vice Presidents</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Resources</a>

        <div class="dropdown-menu">

        <a class="dropdown-item " href="our-founder">Our Founder</a>
        <a class="dropdown-item " href="flag-salutation">Flag Salutation</a>
        <a class="dropdown-item " href="vision-mission">Vision/Mission</a>
        <a class="dropdown-item " href="#">How To Pay Dues?</a> 
        <a class="dropdown-item " href="#">How To Pay For District Projects</a>
        </div>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Calenders</a>

        <div class="dropdown-menu">

        <a class="dropdown-item " href="#">District Calendar</a>
        <a class="dropdown-item " href="#">Hunger Calendar</a>
        </div>
     </li>
     <li class="nav-item dropdown">
     <a class="nav-link link  " href="coming-soon">Gallery</a>	
     </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item " href="downloads">Downloads</a>
        </div>
      </li>

    </ul>
    <div class="navbar-buttons mbr-section-btn">
      <a class="btn btn-sm btn-login" href="{{route('login')}}">Login</a>
     </div>

  </div>
</nav>


