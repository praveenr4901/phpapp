<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lions Clubs International District 318A 2022-23  @hasSection('title') - @yield('title') @endif </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    @stack('stylesheets')
</head>

<body>
<div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    @yield('content')
   <footer class="footer_wrap py-5">
    <div class="container">
       <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <div class="address">
            <h2>Address</h2>
            <p> Lions International District 318A 2023-2024<br/> District Headquarters<br/>Opposite of All India Radio<br/> Vazhuthakkadu Trivandrum 695014</p>
        </div>
        <div class="contact">
            <h2>Contact Us</h2>
            <p> Email : <a href="mailto:mail@lionsdistrict318a.com">lionsdistrict318a2324@gmail.com</a><br/>
                Landline : <a href="tel:0471405368">0471-4053686</a><br/>
Mobile : <a href="tel:9895737385">9895737385</a><br/>
Liaison With Clubs :  <a href="tel:9895737335">9895737335</a>
            </p>    
        </div>
                
                
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d886.2812251146103!2d76.96142523373831!3d8.495764233706241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sin!4v1690551453922!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 copy_right" >Copyright &copy; 2023. All rights reserved.</div>
      </div>
    </div> 
    </footer>
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- waves js -->
    <script src="{{ asset('assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>

    <!-- menu js -->
    <script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
    <script src="{{ asset('assets/js/vertical/vertical-layout.min.js ')}}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/script.js ')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000"
            };
            
//start counter
            $('.counter').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
//end counter

        });
            function openTab(evt, tabName) {
            var i, tabContent, tabButton;

            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            tabButton = document.getElementsByClassName("tab-button");
            for (i = 0; i < tabButton.length; i++) {
                tabButton[i].classList.remove("active");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
            }
            // document.querySelector(".tab-button").click();
    </script>
    @stack('javascripts')
</body>

</html>
