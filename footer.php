<?php
  class  display_detes{




    function display_header(){
      $element=
        '
        <header style= "padding: 30px" "text-align: center">

        <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mask rgba-black-strong">

            <div class="container">

              <!-- Navbar brand -->
              <a class="navbar-brand" href="index.html">Tema Port</a>

              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto smooth-scroll">
                      <li class="nav-item">
                            <a class="nav-link" href="./index.html">Home</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="./process.php">Export process</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href=./book.php>Export a product</a>
                      </li>
                      <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact us</a>
                      </li>
                  </ul>
                  <!-- Links -->

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link"><i class="fab fa-facebook" href="https://www.facebook.com/MPSTemaPort/"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fab fa-twitter" href="https://twitter.com/ghanaportnews?lang=en"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"><i class="fab fa-instagram"href="https://www.instagram.com/explore/locations/394513080931689/port-of-tema-west-africa/"></i></a>
                        </li>
                    </ul>
              </div>
                <!-- Collapsible content -->

            </div>
          </nav>
        <!--/.Navbar-->



    </header>

        ';
      echo $element;

    }

    function display_headerlog(){
        $element=
          '
          <header style= "padding: 30px" "text-align: center">
  
          <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mask rgba-black-strong">
  
              <div class="container">
  
                <!-- Navbar brand -->
                <a class="navbar-brand" href=".././index.html">Gospel Kids</a>
  
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
  
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
  
                  <!-- Links -->
                  <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                              <a class="nav-link" href=".././index.html">Home</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href=".././mainp/about.php">About</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href=".././mainp/contact.php">Contact us</a>
                        </li>
                    </ul>
                    <!-- Links -->
  
                      <!-- Social Icon  -->
                      <ul class="navbar-nav nav-flex-icons">
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-facebook" href="https://www.facebook.com/MPSTemaPort/"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-twitter" href="https://twitter.com/ghanaportnews?lang=en"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-instagram"href="https://www.instagram.com/explore/locations/394513080931689/port-of-tema-west-africa/"></i></a>
                          </li>
                      </ul>
                </div>
                  <!-- Collapsible content -->
  
              </div>
            </nav>
          <!--/.Navbar-->
  
  
  
      </header>
  
          ';
        echo $element;
  
      }

    function display_footer(){
      $foot= "
      <footer class='page-footer font-small unique-color-dark'>

      <!-- Social buttons -->
      <div class='primary-color'>
          <div class='container'>
              <!--Grid row-->
              <div class='row py-4 d-flex align-items-center'>

                  <!--Grid column-->
                  <div class='col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0'>
                      <h6 class='mb-0 white-text'>Get connected with us on social media!</h6>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class='col-md-6 col-lg-7 text-center text-md-right'>
                      <!--Facebook-->
                      <a class='fb-ic ml-0'>
                          <i class='fab fa-facebook white-text mr-4'> </i>
                      </a>
                      <!--Twitter-->
                      <a class='tw-ic'>
                          <i class='fab fa-twitter white-text mr-4'> </i>
                      </a>
                      <!--Google +-->
                      <a class='gplus-ic'>
                          <i class='fab fa-google-plus white-text mr-4'> </i>
                      </a>
                      <!--Linkedin-->
                      <a class='li-ic'>
                          <i class='fab fa-linkedin white-text mr-4'> </i>
                      </a>
                      <!--Instagram-->
                      <a class='ins-ic'>
                          <i class='fab fa-instagram white-text mr-lg-4'> </i>
                      </a>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->
          </div>
      </div>
      <!-- Social buttons -->

      <!--Footer Links-->
      <div class='container mt-5 mb-4 text-center text-md-left'>
          <div class='row mt-3'>

              <!--First column-->
              <div class='col-md-3 col-lg-4 col-xl-3 mb-4'>
                  <h6 class='text-uppercase font-weight-bold'>
                      <strong>Port Of Tema</strong>
                  </h6>
                  <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                  <p>One of Ghana's Hub for export and import</p>
              </div>
              <!--/.First column-->

              <!--Second column-->
              <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
                  <h6 class='text-uppercase font-weight-bold'>
                      <strong>navigation</strong>
                  </h6>
                  <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                  <p>
                      <a href='index.html'>Home</a>
                  </p>
                  <p>
                      <a href='process.php'>Process</a>
                  </p>
                  <p>
                      <a href='about.php'>About</a>
                  </p>
                  <p>
                      <a href='contact.php'>Contact</a>
                  </p>
              </div>
              <!--/.Second column-->

              <!--Third column-->
             
              <!--/.Third column-->

              <!--Fourth column-->
              <div class='col-md-4 col-lg-3 col-xl-3'>
                  <h6 class='text-uppercase font-weight-bold'>
                      <strong>Contact</strong>
                  </h6>
                  <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                  <p>
                      <i class='fas fa-home'></i></i> PO Box 139 Tema Ghana</p>
                  <p>
                      <i class='fa fa-envelope mr-3'></i> tema@ghanaports.net</p>
                  <p>
                      <i class='fa fa-phone mr-3'></i> 233 22 204385</p>
                  <p>
                      <i class='fa fa-print mr-3'</i> 	233 22 204136</p>
              </div>
              <!--/.Fourth column-->

          </div>
      </div>

    </footer>
      ";
      echo $foot;
    }

    function display_footerlog(){
        $foot= "
        <footer class='page-footer font-small unique-color-dark'>
  
        <!-- Social buttons -->
        <div class='primary-color'>
            <div class='container'>
                <!--Grid row-->
                <div class='row py-4 d-flex align-items-center'>
  
                    <!--Grid column-->
                    <div class='col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0'>
                        <h6 class='mb-0 white-text'>Get connected with us on social media!</h6>
                    </div>
                    <!--Grid column-->
  
                    <!--Grid column-->
                    <div class='col-md-6 col-lg-7 text-center text-md-right'>
                        <!--Facebook-->
                        <a class='fb-ic ml-0'>
                            <i class='fab fa-facebook white-text mr-4'> </i>
                        </a>
                        <!--Twitter-->
                        <a class='tw-ic'>
                            <i class='fab fa-twitter white-text mr-4'> </i>
                        </a>
                        <!--Google +-->
                        <a class='gplus-ic'>
                            <i class='fab fa-google-plus white-text mr-4'> </i>
                        </a>
                        <!--Linkedin-->
                        <a class='li-ic'>
                            <i class='fab fa-linkedin white-text mr-4'> </i>
                        </a>
                        <!--Instagram-->
                        <a class='ins-ic'>
                            <i class='fab fa-instagram white-text mr-lg-4'> </i>
                        </a>
                    </div>
                    <!--Grid column-->
  
                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->
  
        <!--Footer Links-->
        <div class='container mt-5 mb-4 text-center text-md-left'>
            <div class='row mt-3'>
  
                <!--First column-->
                <div class='col-md-3 col-lg-4 col-xl-3 mb-4'>
                    <h6 class='text-uppercase font-weight-bold'>
                        <strong>Port Of Tema</strong>
                    </h6>
                    <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                    <p>One of Ghana's Hub for export and import</p>
                </div>
                <!--/.First column-->
  
                <!--Second column-->
                <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
                    <h6 class='text-uppercase font-weight-bold'>
                        <strong>navigation</strong>
                    </h6>
                    <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                    <p>
                        <a href='.././index.html'>Home</a>
                    </p>
                    <p>
                        <a href='../mainp/process.php'>Process</a>
                    </p>
                    <p>
                        <a href='../mainp/about.php'>About</a>
                    </p>
                    <p>
                        <a href='../main/contact.php'>Contact</a>
                    </p>
                </div>
                <!--/.Second column-->
  
                <!--Third column-->
               
                <!--/.Third column-->
  
                <!--Fourth column-->
                <div class='col-md-4 col-lg-3 col-xl-3'>
                    <h6 class='text-uppercase font-weight-bold'>
                        <strong>Contact</strong>
                    </h6>
                    <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
                    <p>
                        <i class='fas fa-home'></i></i> PO Box 139 Tema Ghana</p>
                    <p>
                        <i class='fa fa-envelope mr-3'></i> tema@ghanaports.net</p>
                    <p>
                        <i class='fa fa-phone mr-3'></i> 233 22 204385</p>
                    <p>
                        <i class='fa fa-print mr-3'</i> 	233 22 204136</p>
                </div>
                <!--/.Fourth column-->
  
            </div>
        </div>
  
      </footer>
        ";
        echo $foot;
      }

    function display_userheader(){
        $element=
          '
          <header style= "padding: 30px" "text-align: center" height:30px>
  
          <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mask rgba-black-strong">
  
              <div class="container">
  
                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.html">Gospel Kids</a>
  
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
  
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
  
                  <!-- Links -->
                  <ul class="navbar-nav mr-auto smooth-scroll">
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                            <span class="clearfix d-none d-sm-inline-block">Account</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="logout.php">logout</a>
                                <a class="dropdown-item" href="reset-password.php">change password</a>
                        
                            </div>
                       
                     
                    </ul>
                    <!-- Links -->
                    <!-- Links -->
                  
                      <!-- Social Icon  -->
                      <ul class="navbar-nav nav-flex-icons">
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-facebook" href="https://www.facebook.com/MPSTemaPort/"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-twitter" href="https://twitter.com/ghanaportnews?lang=en"></i></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link"><i class="fab fa-instagram"href="https://www.instagram.com/explore/locations/394513080931689/port-of-tema-west-africa/"></i></a>
                          </li>
                      </ul>
                </div>
                  <!-- Collapsible content -->
  
              </div>
            </nav>
          <!--/.Navbar-->
  
  
  
      </header>
  
          ';
        echo $element;
  
      }




      function displaySideMenu(){

          $element='
     <div class="container-fluid">
    <div class="row min-vh-100 flex-column flex-md-row">
        <aside class="col-12 col-md-2 p-0 bg-dark flex-shrink-1">
            <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse " id="basicExampleNav">
                    
                    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link pl-0 text-nowrap" href="./user_welcompage.php"><i class="fa fa-bullseye fa-fw"></i> <span class="font-weight-bold">Gospel Kids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="./reset-password.php"><i class="fa fa-key fa-fw"></i> <span class="d-none d-md-inline">Change Password</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="./logout.php"><i class="fa fa-cog fa-fw"></i> <span class="d-none d-md-inline">logout</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="../mainp/book.php"><i class="fa fa-plus codeply fa-fw"></i> <span class="d-none d-md-inline">Add a video</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="../mainp/liked_videos.php"><i class="fa fa-star codeply fa-fw"></i> <span class="d-none d-md-inline">Explore videos</span></a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </aside>
         <main class="col bg-faded py-3 flex-grow-1">
            
          
          ';

          echo $element;
      }

      function showUserfooter(){
          $element="
      <footer class='page-footer font-small unique-color-dark'>

  <!-- Social buttons -->
  <div class='primary-color'>
      <div class='container'>
          <!--Grid row-->
          <div class='row py-4 d-flex align-items-center'>

              <!--Grid column-->
              <div class='col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0'>
                  <h6 class='mb-0 white-text'>Get connected with us on social media!</h6>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class='col-md-6 col-lg-7 text-center text-md-right'>
                  <!--Facebook-->
                  <a class='fb-ic ml-0'>
                      <i class='fab fa-facebook white-text mr-4'> </i>
                  </a>
                  <!--Twitter-->
                  <a class='tw-ic'>
                      <i class='fab fa-twitter white-text mr-4'> </i>
                  </a>
                  <!--Google +-->
                  <a class='gplus-ic'>
                      <i class='fab fa-google-plus white-text mr-4'> </i>
                  </a>
                  <!--Linkedin-->
                  <a class='li-ic'>
                      <i class='fab fa-linkedin white-text mr-4'> </i>
                  </a>
                  <!--Instagram-->
                  <a class='ins-ic'>
                      <i class='fab fa-instagram white-text mr-lg-4'> </i>
                  </a>
              </div>
              <!--Grid column-->

          </div>
          <!--Grid row-->
      </div>
  </div>
  <!-- Social buttons -->

  <!--Footer Links-->
  <div class='container mt-5 mb-4 text-center text-md-left'>
      <div class='row mt-3'>

          <!--First column-->
          <div class='col-md-3 col-lg-4 col-xl-3 mb-4'>
              <h6 class='text-uppercase font-weight-bold'>
                  <strong>Port Of Tema</strong>
              </h6>
              <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
              <p>One of Ghana's Hub for export and import</p>
          </div>
          <!--/.First column-->

          <!--Second column-->

          <!--/.Second column-->

          <!--Third column-->

          <!--/.Third column-->

          <!--Fourth column-->
          <div class='col-md-4 col-lg-3 col-xl-3'>
              <h6 class='text-uppercase font-weight-bold'>
                  <strong>Contact</strong>
              </h6>
              <hr class='deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto' style='width: 60px;'>
              <p>
                  <i class='fas fa-home'></i></i> PO Box 139 Tema Ghana</p>
              <p>
                  <i class='fa fa-envelope mr-3'></i> tema@ghanaports.net</p>
              <p>
                  <i class='fa fa-phone mr-3'></i> 233 22 204385</p>
              <p>
                  <i class='fa fa-print mr-3'></i> 	233 22 204136</p>
          </div>
          <!--/.Fourth column-->

      </div>
  </div>

</footer>
      ";
          echo $element;
      }



      function beatifulheader(){
        $element= '
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=".././final-papakofifog/login/reset-password.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>change Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././final-papakofifog/login/logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".././final-papakofifog/login/logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>change profile picture</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="pages/forms/general.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Upload Videos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>';
        echo $element;
      }




      function display_headeruserp(){
          $element=
              '
          <header style= "padding: 30px" "text-align: center">
  
          <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar mask rgba-black-strong">
  
              <div class="container">
  
                <!-- Navbar brand -->
                <a class="navbar-brand" href="../login/user_welcompage.php">Back</a>
  
                <!-- Collapse button -->
                 Collapsible content -->
  
              </div>
            </nav>
          <!--/.Navbar-->
  
  
  
      </header>
  
          ';
          echo $element;

      }
  }










?>
