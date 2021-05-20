<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <!-- MDB icon -->
    <link rel="icon" href="mbd/img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
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

                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>PO Box 139 Tema Ghana
                </p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>233 22 204136</p>

            </div>
            <!--Grid column-->

        </div>
            <!--Grid row-->

        <!--Google map-->
        <div ></div>
        <div  > <?php
            require_once '.././location.php';
            echo $element;
        ?>
        </div>
        <!--Grid column-->

        </div>
        <!--Grid row-->

        </section>
        <!--Section: Contact-->
    

      
             
    <hr class="my-5">
      <?php
          require_once '.././footer.php';

          $footer4= new display_detes();
          echo $footer4->display_footerlog();
        ?>

    <!-- jQuery -->
    <script type="text/javascript" src=".././mbd/js/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src=".././mbd/js/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src=".././mbd/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src=".././mbd/js/mdb.min.js"></script>
      <!-- Your custom scripts (optional) -->
        
    
  </body>


    
</html>
