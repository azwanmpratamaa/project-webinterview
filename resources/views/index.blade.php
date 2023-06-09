<!DOCTYPE html>
<html lang="en">
<head>

	<title>Website Interview</title>
	<!--

    Template 2106 Soft Landing

	http://www.tooplate.com/view/2106-soft-landing

    -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/owl.carousel.css">
     <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/css/tooplate-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Interview</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Features</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#">Say hello - <span>info@soft.co</span></a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h3>professional landing page</h3>
                              <h1>We help you manage your website successfully!</h1>
                              <form action="" method="get" class="online-form">
                                   <header>
                                        {{-- kalo uda login, button yang dimunculin button buat masuk ke halaman data --}}
                                        @if (Auth::check())
                                            @if (Auth::user()->role === 'admin')
                                            <a href="{{route('data')}}" class="login-btn">Lihat Data</a>
                                            @elseif (Auth::user()->role == 'petugas')
                                            <a href="{{route('data.petugas')}}" class="login-btn">Lihat Data</a>
                                            @endif
                                        {{-- kalau dia belum login, button yang dimunculin button buat ke halaman login --}}
                                        @else
                                            <a href="{{route('login')}}" class="login-btn">Login<a>
                                        @endif
                                    </header>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>What you get</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Responsive</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Mobile</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Support</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Minimal Design</h2>
                                        <p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Easy to use</h2>
                                        <p>Aliquam massa massa, consectetur non mattis fringilla, sodales ac turpis. Morbi ac felis sagittis, faucibus mauris vitae, placerat mauris.</p>
                                   </div>
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Compatible Browsers</h2>
                                        <p>Nam maximus elit a metus luctus, a faucibus magna mattis. Ut malesuada viverra iaculis. Nunc euismod sit amet neque a tincidunt.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>User Friendly</h2>
                                        <p>Maecenas maximus velit lorem, quis pharetra turpis fringilla id. Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>HTML5 & CSS3</h2>
                                        <p>In viverra ipsum ornare sapien rhoncus ullamcorper. Vivamus vitae risus ac mi vehicula sagittis. Nulla dictum magna sit amet pharetra aliquam.</p>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Quick Support</h2>
                                        <p>Mauris rutrum est at fringilla pulvinar. Nam ligula urna, lobortis non scelerisque vel, molestie eu massa. Nullam mattis elit at tortor accumsan.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Managed Stuffs</h2>
                                        <p>Quisque ullamcorper sem quis sapien cursus efficitur. Sed id sodales ipsum. Morbi eleifend tempus erat sit amet vehicula. Nulla at posuere tellus, non mattis erat. Nulla id massa gravida.</p>
                                   </div>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="assets/images/feature-mockup.png" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>Professional Team for you</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="assets/images/team-image1.jpg" class="img-responsive" alt="Andrew Orange">
                              <div class="team-info team-thumb-up">
                                   <h2>Andrew Orange</h2>
                                   <small>Art Director</small>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <div class="team-info team-thumb-down">
                                   <h2>Catherine Soft</h2>
                                   <small>Senior Manager</small>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                              <img src="assets/images/team-image2.jpg" class="img-responsive" alt="Catherine Soft">
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="assets/images/team-image3.jpg" class="img-responsive" alt="Jack Wilson">
                              <div class="team-info team-thumb-up">
                                   <h2>Jack Wilson</h2>
                                   <small>CEO / Founder</small>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">
                              
                              <div class="section-title">
                                   <h1>What People Say</h1>
                              </div>

                              <div class="owl-carousel owl-theme">
                                   <div class="item">
                                        <h3>Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum. In viverra ipsum ornare sapien rhoncus ullamcorper.</h3>
                                        <div class="testimonial-item">
                                             <img src="assets/images/tst-image1.jpg" class="img-responsive" alt="Michael">
                                             <h4>Michael</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Donec pretium tristique elit eget sodales. Pellentesque posuere, nunc id interdum venenatis, leo odio cursus sapien, ac malesuada nisl libero eget urna.</h3>
                                        <div class="testimonial-item">
                                             <img src="assets/images/tst-image2.jpg" class="img-responsive" alt="Sofia">
                                             <h4>Sofia</h4>
                                        </div>
                                   </div>

                                   <div class="item">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</h3>
                                        <div class="testimonial-item">
                                             <img src="assets/images/tst-image3.jpg" class="img-responsive" alt="Monica">
                                             <h4>Monica</h4>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>



     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <form action="{{route('kirim_data')}}" method="post"  enctype="multipart/form-data">
                    @csrf
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                              <div class="section-title">
                                   <h1>Say hello to us</h1>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" name="name" class="form-control" id="name" placeholder="Full name" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" name="name" class="form-control" id="name" placeholder="Email address" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="number" name="age" class="form-control" id="age" placeholder="Your age" required="">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Your Phone Number" required=""></textarea>
                              </div>
                         </form>
                    </div>
                    
                    <div class="row">
                         <div class="col form-group mt-4">
                           <select name="last_education" id="last_education" class="form-control">
                             <option selected hidden disabled>Select Last Education</option>
                             <option value="SMA">SMA</option>
                             <option value="SMK">SMK</option>
                             <option value="STM">STM</option>
                             <option value="UNIVERSITAS">UNIVERSITAS</option>
                           </select>
                         </div>
                         <div class="col form-group mt-4">
                              <input type="text" class="form-control" name="education_name" id="education_name" placeholder="Education Instituional" required>
                            </div>
                          </div>
                         
                          <div class="form-group mt-4">
                            <input type="file" name="cv_file" class="form-control">
                          </div>
                          @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                                  <li style="font-weight:bold">{{ $error }}</li>
                              @endforeach
                          </ul>
                          </div>
                          @endif
                          <div class="text-center mt-2"><button class="btn btn-danger" type="submit">Send Message</button></div>
                        </form>
                      </div>
            
                    </div>
            
                  </div>
                </section><!-- End Contact Section -->
            
              </main><!-- End #main -->   


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2018 Company Name - Design:
                				<a rel="nofollow" href="http://tooplate.com">Tooplate</a></p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="assets/js/jquery.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/jquery.stellar.min.js"></script>
     <script src="assets/js/owl.carousel.min.js"></script>
     <script src="assets/js/smoothscroll.js"></script>
     <script src="assets/js/custom.js"></script>

</body>
</html>