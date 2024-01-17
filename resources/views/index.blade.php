<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>{{ env('APP_NAME') }} - Home</title>
  <link rel="shortcut icon" href="/assets/img/favicon.png">
  <link rel="stylesheet" href="/assets/css/plugins.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="onepage">
  <div class="content-wrapper">
    <header class="wrapper bg-gray">
      <nav class="navbar navbar-expand-lg center-logo transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/">
              {{-- <imgsrc="/assets/img/logo.png"srcset="/assets/img/logo@2x.png2x"alt=""/> --}}
              <h4 class="Text-dark">Zee-<span class="text-primary">Tech</span></h4>
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Zee-Tech</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link scroll active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#process">Process</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:info@zeetech.ng" class="link-inverse">info@zeetech.ng</a>
                  <br /> 08096460055 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              {{--<li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                </ul>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="/contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
              </li>--}}
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section id="home">
      <div class="wrapper bg-gray">
        <div class="container pt-10 pt-md-14 pb-14 pb-md-17 text-center">
          <div class="row text-center">
            <div class="col-lg-9 col-xxl-7 mx-auto" data-cues="zoomIn" data-group="welcome" data-interval="-200">
              <h2 class="display-1 mb-4">Creative. Smart. Awesome.</h2>
              <p class="lead fs-24 lh-sm px-md-5 px-xl-15 px-xxl-10">Welcome to Zee-Tech General Services Limited, your trusted partner in innovative IT and sustainable solutions.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
          <div class="row text-center mt-10">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
              <figure><img class="w-auto" src="/assets/img/illustrations/i8.png" srcset="/assets/img/illustrations/i8@2x.png 2x" alt="" /></figure>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section id="services">
      <div class="wrapper bg-light">
        <div class="container py-14 py-md-17">
          <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
              <ul class="progress-list">
                <li>
                  <p>Marketing</p>
                  <div class="progressbar line blue" data-value="90"></div>
                </li>
                <li>
                  <p>IT Solutions</p>
                  <div class="progressbar line green" data-value="100"></div>
                </li>
                <li>
                  <p>Development</p>
                  <div class="progressbar line yellow" data-value="85"></div>
                </li>
                <li>
                  <p>Sustainable Solutions</p>
                  <div class="progressbar line orange" data-value="90"></div>
                </li>
              </ul>
              <!-- /.progress-list -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
              <h3 class="display-5 mb-5">The full service we are offering is specifically designed to meet your business needs and projects.</h3>
              <p>Established in 2010, we bring a decade of expertise to empower businesses through cutting-edge technologies and environmentally conscious practices.</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row gx-lg-8 gx-xl-12 gy-6 gy-md-0 text-center">
            <div class="col-md-6 col-lg-3">
              <img src="/assets/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
              <h4>Marketing</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <img src="/assets/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
              <h4>IT Solutions</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <img src="/assets/img/icons/lineal/settings-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
              <h4>Development</h4>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-3">
              <img src="/assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
              <h4>Sustainable Solutions</h4>
            </div>
            <!--/column --> 
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section id="process">
      <div class="wrapper bg-gray">
        <div class="container py-14 py-md-17">
          <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-16 align-items-center">
            <div class="col-lg-7">
              <figure><img class="w-auto" src="/assets/img/illustrations/i3.png" srcset="/assets/img/illustrations/i3@2x.png 2x" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h2 class="fs-15 text-uppercase text-line text-primary mb-3">How It Works?</h2>
              <h3 class="display-5 mb-7 pe-xxl-5">Everything you need on creating a business process.</h3>
              <div class="d-flex flex-row mb-4">
                <p class="mb-2">
                    At Zee-Tech, we believe in a collaborative and transparent approach to every project. Our team works closely with clients to understand their goals, ensuring seamless integration of technology and sustainability into their business strategy.
                </p>
              </div>
              <div class="d-flex flex-row">
                
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 order-lg-2">
              <figure><img class="w-auto" src="/assets/img/illustrations/i2.png" srcset="/assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
              <h3 class="display-5 mb-7">A few reasons why our valued customers choose us.</h3>
              <div class="accordion accordion-wrapper" id="accordionExample">
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingOne">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Proven Excellence </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>A decade of delivering top-notch IT solutions and sustainable practices.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingTwo">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Innovation Hub </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Stay ahead with our forward-thinking approach to technology.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->
                <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Customer-Centric Approach </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="card-body">
                      <p>Tailored solutions to meet your unique business needs.</p>
                    </div>
                    <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
                </div>
                <!--/.accordion-item -->

                <!--/.accordion-item -->
                <div class="card plain accordion-item">
                    <div class="card-header" id="headingFour">
                      <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Sustainability Leadership </button>
                    </div>
                    <!--/.card-header -->
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="card-body">
                        <p>Commitment to eco-friendly practices for a greener future.</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.accordion-collapse -->
                  </div>
                  <!--/.accordion-item -->

              </div>
              <!--/.accordion -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    {{--<section id="about">
      <div class="wrapper bg-light">
        <div class="container py-14 py-md-17">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-4">
              <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Meet the Team</h2>
              <h3 class="display-5 mb-5">Save your time and money by choosing our professional team.</h3>
              <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.</p>
              <a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>
            </div>
            <!--/column -->
            <div class="col-lg-8">
              <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img class="rounded-circle w-20 mx-auto mb-4" src="/assets/img/avatars/t1.jpg" srcset="/assets/img/avatars/t1@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Cory Zamora</h4>
                      <div class="meta mb-2">Marketing Specialist</div>
                      <p class="mb-2">Etiam porta sem magna malesuada mollis.</p>
                      <nav class="nav social justify-content-center text-center mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-slack"></i></a>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <img class="rounded-circle w-20 mx-auto mb-4" src="/assets/img/avatars/t2.jpg" srcset="/assets/img/avatars/t2@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Coriss Ambady</h4>
                      <div class="meta mb-2">Financial Analyst</div>
                      <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p>
                      <nav class="nav social justify-content-center text-center mb-0">
                        <a href="#"><i class="uil uil-youtube"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <img class="rounded-circle w-20 mx-auto mb-4" src="/assets/img/avatars/t3.jpg" srcset="/assets/img/avatars/t3@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Nikolas Brooten</h4>
                      <div class="meta mb-2">Sales Manager</div>
                      <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p>
                      <nav class="nav social justify-content-center text-center mb-0">
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                        <a href="#"><i class="uil uil-tumblr-square"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <img class="rounded-circle w-20 mx-auto mb-4" src="/assets/img/avatars/t4.jpg" srcset="/assets/img/avatars/t4@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Jackie Sanders</h4>
                      <div class="meta mb-2">Investment Planner</div>
                      <p class="mb-2">Nullam risus eget urna mollis ornare vel eu leo.</p>
                      <nav class="nav social justify-content-center text-center mb-0">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                      <img class="rounded-circle w-20 mx-auto mb-4" src="/assets/img/avatars/t5.jpg" srcset="/assets/img/avatars/t5@2x.jpg 2x" alt="" />
                      <h4 class="mb-1">Tina Geller</h4>
                      <div class="meta mb-2">Assistant Buyer</div>
                      <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                      <nav class="nav social justify-content-center text-center mb-0">
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-slack"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                      </nav>
                      <!-- /.social -->
                    </div>
                    <!--/.swiper-slide -->
                  </div>
                  <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
              </div>
              <!-- /.swiper-container -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section> --}}
    <!-- /section -->
    <section id="testimonials">
      <div class="wrapper bg-white">
        <div class="container py-14 py-md-17">
          <div class="row gx-lg-8 gx-xl-12 gy-6 mb-15 align-items-center">
            <div class="col-lg-7 order-lg-2">
              <figure><img class="w-auto" src="/assets/img/illustrations/i4.png" srcset="/assets/img/illustrations/i4@2x.png 2x" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 mt-lg-12">
              <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <blockquote class="icon icon-top fs-lg text-center">
                        <p>Read about how Zee-Tech has transformed businesses across various industries. From enhancing operational efficiency to reducing carbon footprints, our success stories showcase the positive impact of our solutions.</p>
                      </blockquote>
                    </div>
                  </div>
                  <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
              </div>
              <!-- /.swiper-container -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
          {{-- <div class="px-lg-5">
            <div class="row gx-0 gx-md-8 gx-xl-12 gy-8 align-items-center">
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c1.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c2.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c3.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c4.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c5.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col-4 col-md-2">
                <figure class="px-5 px-md-0 px-lg-2 px-xl-3 px-xxl-4"><img src="/assets/img/brands/c6.png" alt="" /></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div> --}}
          <!-- /div -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section id="contact">
      <div class="wrapper bg-light">
        <div class="container py-14 py-md-17">
          <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7">
              <figure><img class="w-auto" src="/assets/img/illustrations/i5.png" srcset="/assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
            </div>
            <!--/column -->
            <div class="col-lg-5">
              <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Get In Touch</h2>
              <h3 class="display-5 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Address</h5>
                  <address>Suite 03 & 04 First Floor aminasia trade center, Aminu Kano crescent Wuse 2, Abuja</address>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">Phone</h5>
                  <p>08096460055</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:info@zeetech.ng" class="link-body">info@zeetech.ng</a></p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.wrapper -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h2 class="text-white">Zee-Tech</h2>
            <p class="mb-4">© <script>document.write(new Date().getFullYear())</script> Zee-Tech. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Suite 03 & 04 First Floor aminasia trade center, Aminu Kano crescent Wuse 2, Abuja</address>
            <a href="mailto:info@zeetech.ng">info@zeetech.ng</a><br />08096460055
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="javascript:void" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields">
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>

</html>