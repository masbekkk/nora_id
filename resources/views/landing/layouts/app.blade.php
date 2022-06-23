<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('landing/assets/images/noraid-logo-sm.png') }}">
    <title>NoraID - Platform Notulensi Rapat Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/templatemo-eduwell-style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/assets/css/lightbox.css') }}">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{ route('landing') }}" class="logo">
                          <img src="{{ asset('landing/assets/images/nora-id-small.png') }}" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Layanan</a></li>
                          <li class="scroll-to-section"><a href="#about">About Us</a></li>
                          <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li> 
                          <li ><a href="{{route('login')}}">Login</a></li> 
                          <li ><a href="{{route('register')}}">Register</a></li> 
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('landing/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('landing/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('landing/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('landing/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('landing/assets/js/tabs.js') }}"></script>
    <script src="{{ asset('landing/assets/js/video.js') }}"></script>
    <script src="{{ asset('landing/assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('landing/assets/js/custom.js') }}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>