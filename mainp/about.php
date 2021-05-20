<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <!-- MDB icon -->
        <!-- Font Awesome -->
    
    <!-- Google Fonts Roboto -->
     <!--Bootstrap core CSS -->
    <link rel="stylesheet" href=".././mbd/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href=".././mbd/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    
    
    
    
    

  
 
  </head>


  <body>
    <?php
        require ".././footer.php";
        $header1= new display_detes();
        echo $header1->display_headerlog();
    ?>

        <!--Section: Gallery-->
        <section id="gallery">

<!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

<!--Grid row-->
            <div class="row">

    <!--Grid column-->
                <div class="col-md-6 mb-4">

        <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner z-depth-1-half" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src= ".././images/director_port.jpg" alt="First slide">
                </div>
                
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-6">

        <!--Excerpt-->
        <a href="" class="teal-text" >
            <h6 class="pb-1"><i class="fa fa-port"></i><strong> Director of Port Of Tema </strong></h6>
        </a>
        <h4 class="mb-3"><strong>Welcome to the Port of Tema Webpage</strong></h4>
        <p style="text-align:justify">
        The Port of Tema contributes significantly to the economic growth of Ghana. As Ghana’s biggest port, we have invested millions of dollars in port infrastructure to improve our operational efficiency in order to meet the growing demands of maritime trade and logistics supply chain.

        Our goal is to transform the Port of Tema into the leading container hub in West Africa. Our transit corridors have been freed of most of the inspection barriers which hitherto caused unnecessary delays and increased the cost of transportation to the landlocked countries. We will continue to provide quality services and high operational standards in our operations to make the Port of Tema the most efficient port in the sub-region.

        Thank you for visiting our website and you are always welcome to do business with us.</p>

        
        <p>by <a><strong></strong>  SANDRA OPOKU (Mrs.) <br>DIRECTOR OF PORT-TEMA</a></p>
        

        </div>
    <!--Grid column-->

    </div>
    <!--Grid row-->

    </section>
    <!--Section: Gallery-->

    <hr class="my-5">


                    

          <!--Section: Contact-->
          <section id="contact">

<!-- Heading -->
<h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

<!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-lg-5 col-md-12">
        <!-- Form contact -->
        <form class="p-5 grey-text">
            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                <input type="text" id="form3" class="form-control form-control-sm">
                <label for="form3">Your name</label>
            </div>
            <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form2" class="form-control form-control-sm">
                <label for="form2">Your email</label>
            </div>
            <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                <input type="text" id="form32" class="form-control form-control-sm">
                <label for="form34">Subject</label>
            </div>
            <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                <label for="form8">Your message</label>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </form>
        <!-- Form contact -->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-md-12">

        <!--Grid row-->
        <div class="row text-center">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-3">

                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>PO Box 139 Tema Ghana</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>	233 22 204136</p>
                
            </div>
            <!--Grid column-->

        </div>
            <!--Grid row-->

        <!--Google map-->
        <div  > <?php
            require_once '.././location.php';
            echo $element;
        ?>
        </div>
            

        </div>
        <!--Grid column-->

        </div>
        <!--Grid row-->

        </section>
        <!--Section: Contact-->

        </div>
  
        <!-- jQuery -->
        <script type="text/javascript" src=".././mbd/js/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src=".././mbd/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src=".././mbd/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src=".././mbd/js/mdb.min.js"></script>
        <!-- Your custom scripts (optional) -->
         
    
        <?php
          require_once '.././footer.php';

          $footer3= new display_detes();
          echo $footer3->display_footerlog();
        ?>

  
    </body>
</html>