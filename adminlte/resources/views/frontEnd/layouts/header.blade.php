  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{URL::to("/")}}" class="logo">
              <img src="{{ asset("frontEnd") }}/images/logo-v3.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{URL::to("/")}}" class="{{ request()->is('/') ? 'active':''}}">Home</a></li>
              <li class="scroll-to-section"><a href="{{URL::to("/about")}}" class="{{ request()->is('about') ? 'active':''}}">About</a></li>
              {{-- <li class="scroll-to-section"><a href="{{URL::to("/services")}}" class="{{ request()->is('services') ? 'active':''}}">Services</a></li> --}}
              <li class="scroll-to-section"><a href="{{URL::to("/projects")}}" class="{{ request()->is('projects') ? 'active':''}}">Projects</a></li>
              <li class="scroll-to-section"><a href="{{URL::to("/blog")}}" class="{{ request()->is('blog') ? 'active':''}}">Blog</a></li>
              <li class="scroll-to-section"><a href="{{URL::to("/contact")}}" class="{{ request()->is('contact') ? 'active':''}}">Contact</a></li> 
              <li class="scroll-to-section"><div class="border-first-button"><a href="{{URL::to("/contact")}}" class="{{ request()->is('contact') ? 'active':''}}">Free Quote</a></div></li> 
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