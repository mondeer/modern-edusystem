<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="Mondia Kering">
    <meta name="url" content="http://www.imond.co.ke">
    <title>Modern Education Portal</title>
    <meta name="description" content="Education solutions, imond.co.ke">
    <meta name="keywords" content="Education system for Kenyan education system">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/plugin.css')}}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/style.css')}}">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <link rel="icon" href="{{url('/imond/img/imond.png')}}">
    <script src="/blog/tinymce/tinymce.min.js"></script>
    <!-- <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'codesample link',
        toolbar: 'bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, fontselect, fontsizeselect, bullist, numlist, outdent, indent, blockquote, subscript, superscript'
      });
    </script> -->

  </head>

 <body>
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->

    <div id="main">
        <div class="container">
            <div class="row">

                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">

                     <div class="my-pic">
                        <img src="/assets/img/brand/black.png" alt="">
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                           <ul class="menu-link">
                               <li><a href="/">Home</a></li>
                               <li><a href="/wiki">WikiGrab</a></li>
                               <li><a href="/login">Login</a></li>
                            </ul>
                         </div>
                        </div>

                      <div class="my-detail">
                        <div class="white-spacing">
                            <h1>Welcome User</h1>
                            <span>All material freely available to you, for you</span>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- About Me (Left Sidebar) End -->

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                      <form method="get" action="/wiki">
                        <div class="subscribe-form margin-top-20">
                            <input id="mc-email" name="keyword" type="text" placeholder="Query Wikipedia" class="text-input">
                            <button class="submit-btn" type="submit">Search</button>
                        </div>
                       <p>Search Wikipedia</p>
                       <label for="mc-email" class="mc-label"></label>
                      </form>
                    	@yield('content')
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="">

              						         <div class="subscribe-form margin-top-20">
              							           <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
              							           <button class="submit-btn" type="submit">Submit</button>
              								     </div>
                              <p>Subscribe to weekly Educational Posts</p>
              								<label for="mc-email" class="mc-label"></label>
              							  </form>

                           </div>
                           <!-- Subscribe Form End -->

                         </div>

                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                        <footer>
                          <ul class="menu-link">
                               <li><a href="/">Home</a></li>
                               <li><a href="/wiki">WikiGrab</a></li>
                               <li><a href="/login">Login</a></li>
                            </ul>

                          <p>&copy; 2018 <a href="#" target="_blank">Modern Edusystem</a>.</p>

						  <!-- imond Credit Start -->
                          <div class="imond-credit">Shared by <i class="fa fa-love"></i><a href="#">Modern Edusystem</a></div>
                          <!-- imond Credit End -->
                         </footer>
                       </div>
                       <!-- Footer End -->


                  </div>
                  <!-- Blog Post (Right Sidebar) End -->

            </div>
         </div>
      </div>



    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('blog/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('blog/js/plugin.js')}}"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('blog/js/scripts.js')}}"></script>


   </body>
 </html>
