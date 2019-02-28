<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<form class="" action="health.inc.php" method="post"  enctype="multipart/form-data">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                   <a href="#" class="navbar-brand"><input placeholder="Company Name" name="name"></input></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>Healthy Living</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>New Lifestyle</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>Your Health Benefits</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your name</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                  <p><textarea rows="10" cols="70" placeholder="Your Text" name="desc"></textarea></p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <figcaption>
                                       <h3><input placeholder="Doctor's Name" name="doc1"></input></h3>
                                  <br>
                                        <p><input placeholder="Doctor's Post" name="post1"></input></p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                               <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />

                                   <div class="team-info">
                                        <h3><input size="15" placeholder="Doctor's Name" name="doc2"></input></h3>
                                        <p><input placeholder="Doctor's Post" name="post2"></input></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i>
                                               <input placeholder="Mobile No." name="docNo2"></input></p>
                                             <p><i class="fa fa-envelope-o"></i>
                                               <input placeholder="Email id" name="docmail2"></input></a></p>
                                        </div>

                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />

                                   <div class="team-info">
                                        <h3><input size="15" placeholder="Doctor's Name" name="doc3"></input></h3>
                                        <p><input placeholder="Doctor's Post" name="post3"></input></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> <input placeholder="Mobile No." name="docNo3"></input></p>
                                             <p><i class="fa fa-envelope-o"></i>  <input placeholder="Email id" name="docmail3"></input></a></p>
                                        </div>

                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                             <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />

                                   <div class="team-info">
                                        <h3><input  size="15" placeholder="Doctor's Name" name="doc4"></input></h3>
                                        <p><input placeholder="Doctor's Post" name="post4"></input></p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> <input placeholder="Mobile No." name="docNo4"></input></p>
                                             <p><i class="fa fa-envelope-o"></i>  <input placeholder="Email id" name="docmail4"></input></a></p>
                                        </div>

                                   </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />
                              </a>
                              <div class="news-info">
								  <h3><input size="10" placeholder="News1" name="news1"></input></h3>
                                   <p><textarea placeholder="Short Description" rows="3" cols="40" name="newsdesc1"></textarea></p>

                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />
                              </a>
                              <div class="news-info">
                                  <h3><input size="10" placeholder="News2" name="news2"></input></h3>
                                   <p><textarea placeholder="Short Description" rows="3" cols="40" name="newsdesc2"></textarea></p>

                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>
                                <img id="uploadPreview" src="" width="100%" style="display:none" />
                              </a>
                              <div class="news-info">

                                   <h3><input size="10" placeholder="News3" name="news3"></input></h3>
                                   <p><textarea placeholder="Short Description" rows="3" cols="40" name="newsdesc3"></textarea></p>

                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>




     <!-- GOOGLE MAP
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>           -->


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>


                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>
                                    <input type="text" name="TeleNo" placeholder="Telephone No."></input>  </p>
                                   <p><i class="fa fa-envelope-o"></i>
                                    <input type="text" name="Email" placeholder="mailID"></input> </p>


                              </div>
                         </div>
                    </div>



                    <div style="float: right" class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday-Friday <span><input type="text" name="monfri" placeholder="Monday-Friday"></input></span></p>
                                   <p>Saturday <span><input type="text" name="sat" placeholder="Saturday"></input></span></p>
                                   <p>Sunday <span><input type="text" name="sun" placeholder="Sunday"></input></span></p>
                              </div>


                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2018 Your Company
                                    <input type="text" name="Company" placeholder="Copyright">
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">

                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>
  <button type="submit" name="button" value="Upload Image">submit</button>
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
</form>
</body>
</html>
