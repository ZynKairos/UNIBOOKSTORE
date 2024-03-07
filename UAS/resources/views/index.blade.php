<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>hightech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('hightech-master') }}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('hightech-master') }}/css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="{{ asset('hightech-master') }}/css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('hightech-master') }}/images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ url('/') }}"><img src="{{ asset('hightech-master') }}/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ url('/') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">Pengadaan</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ url('/dashboard') }}">Admin</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Selamat Datang <br>di Toko Buku </h1>
                                    <p>"Selamat datang di Surga Kata <br>Di sini, setiap halaman adalah petualangan, <br> dan setiap buku adalah pintu menuju pengetahuan yang tak terbatas. <br> Temukan inspirasi dan pengetahuan yang tak ternilai di setiap rak buku kami."</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Selamat Datang  <br>di Toko Buku </h1>
                                   <p>"Langit biru di atas kepala, dan buku-buku di tangan. <br> Inilah tempat di mana perjalanan tak terhingga dimulai.<br> Temukan keajaiban di setiap halaman, dan biarkan kata-kata membawa Anda ke tempat yang baru. <br> Selamat menikmati petualangan literasi di Toko Buku kami."</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Selamat Datang  <br>di Toko Buku </h1>
                                    <p>"Di sini, buku-buku bukan hanya barang dagangan, <br> melainkan teman setia yang siap menemani Anda dalam setiap petualangan literasi. <br>Temukan kekayaan tak ternilai dalam kata-kata yang ditawarkan oleh rak-rak buku kami. <br> Selamat menikmati pengalaman membaca yang memikat dan menginspirasi di Toko Buku kami."</p>
                                 </div>
                              </div>
                           </div>
                        </div>                    
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- we_do -->
      <div class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>What we do ?</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="we1" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#we1" data-slide-to="0" class="active"></li>
                        <li data-target="#we1" data-slide-to="1"></li>
                        <li data-target="#we1" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="{{ asset('hightech-master') }}/images/we1.png" alt="#"/></i>
                                          <h3>website development</h3>
                                          <p>The process of designing, building, and maintaining a website to create an optimal user experience, meet business needs, and achieve established online goals.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="{{ asset('hightech-master') }}/images/we2.png" alt="#"/></i>
                                          <h3>App development</h3>
                                          <p>The process of designing, building, and testing software applications for a specific platform, such as iOS or Android, with the goal of providing a useful solution or service to users.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="{{ asset('hightech-master') }}/images/we3.png" alt="#"/></i>
                                          <h3>website design</h3>
                                          <p>The process of creating the visual appearance and functionality of a website to suit user needs and achieve desired business goals.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="{{ asset('hightech-master') }}/images/download.jpeg" alt="#"/></i>
                                          <h3>Full Stack</h3>
                                          <p>Refers to the ability to develop software both on the client side (front-end) and on the server side (back-end), covering all aspects of web application development.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="bo_ho" class="we_box text_align_left">
                                           <i><img src="{{ asset('hightech-master') }}/images/front.jpeg" alt="#"/></i>
                                           <h3>Front End</h3>
                                           <p>The frontend is the part of a website or application that is visible to users and interacts with them directly. This includes appearance, interaction, and user experience.</p>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="{{ asset('hightech-master') }}/images/back.png" alt="#"/></i>
                                          <h3>Back End</h3>
                                          <p>The backend is the part of a website or application that is not visible to the user, but functions behind the scenes to manage data, logic, and core functions.</p>
                                       </div>
                                    </div>                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#we1" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#we1" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_do -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About Company</h2>
                     <p>a place where people can buy various types of books and literature for reading and studying.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- portfolio -->
      <div class="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>We Have Done Portfolio  </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="{{ asset('hightech-master') }}/images/prot1.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Enhancement</h3>
                           <p>Recently the number of book readers in our store has increased rapidly</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="{{ asset('hightech-master') }}/images/prot2.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Bookstore branch</h3>
                           <p>Our new book branch outside Java reaches more readers throughout the region.</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="{{ asset('hightech-master') }}/images/prot3.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>College student</h3>
                           <p>College students often gather in bookstores to work on their group assignments. and we are grateful because they use the books in our shop</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="{{ asset('hightech-master') }}/images/prot4.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Client</h3>
                           <p>The bookstore is busy with clients looking to collaborate on various literacy projects.</p>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end portfolio -->
      <!-- chose -->
      <div class="chose">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Why Chose us</h2>
                  </div>
               </div>
               <div class="col-lg-5 col-md-4">
                  <div class="chose_box">
                     <i><img src="{{ asset('hightech-master') }}/images/chose1.png" alt="#"/></i>
                     <h3>Project Done </h3>
                     <strong>1000+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
               <div class="col-lg-5 col-md-4">
                  <div class="chose_box">
                     <i><img src="{{ asset('hightech-master') }}/images/chose2.png" alt="#"/></i>
                     <h3>Happy Clients </h3>
                     <strong>900+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4">
                  <div class="chose_box">
                     <i><img src="{{ asset('hightech-master') }}/images/chose3.png" alt="#"/></i>
                     <h3>Awards</h3>
                     <strong>100+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end chose -->
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>Get In Touch</h2>
                  </div>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Name" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send Now</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>What Says Clients</h2>
                  </div>
                  <div id="clientsl" class="carousel slide our_clientsl" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#clientsl" data-slide-to="0" class="active"></li>
                        <li data-target="#clientsl" data-slide-to="1"></li>
                        <li data-target="#clientsl" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="{{ asset('hightech-master') }}/images/clint.jpg" alt="#"/></i>
                                    <h3>Deno <img src="{{ asset('hightech-master') }}/images/icon.png" alt="#"/></h3>
                                    <p>This bookstore offers a very complete and varied selection of books, at very affordable prices.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="{{ asset('hightech-master') }}/images/wan1.jpg" alt="#"/></i>
                                    <h3>Oktavian Aristina <img src="{{ asset('hightech-master') }}/images/icon.png" alt="#"/></h3>
                                    <p>I am very happy with the service here, the staff is very friendly and helped us well.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="{{ asset('hightech-master') }}/images/wan.jpg" alt="#"/></i>
                                    <h3>Anisa Aulia <img src="{{ asset('hightech-master') }}/images/icon.png" alt="#"/></h3>
                                    <p>The service here is very fast and efficient, we always get the book we are looking for in no time.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#clientsl" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#clientsl" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_footer" href="{{ url('/') }}"><img src="{{ asset('hightech-master') }}/images/logo_footer.png" alt="#" /></a>
                  </div>
                  <div class="col-md-9">
                     <form class="newslatter_form">
                        <input class="ente" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="subs_btn">Sbscribe Now</button>
                     </form>
                  </div>
                  <div class="col-md-3 col-sm-6"
                  >
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="{{ url('/') }}">Home</a></li>
                           <li><a href="about.html">Pengadaan</a></li>
                           <li><a href="{{ url('/dashboard') }}">Admin</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6"></div>
                  <div class="col-md-3 col-sm-6"></div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Location
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call +62 838 6295 6209
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> zynkairos@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2024 All Rights Reserved ZynKairos</a></p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('hightech-master') }}/js/jquery.min.js"></script>
      <script src="{{ asset('hightech-master') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('hightech-master') }}/js/jquery-3.0.0.min.js"></script>
      <script src="{{ asset('hightech-master') }}/js/custom.js"></script>
   </body>
</html>