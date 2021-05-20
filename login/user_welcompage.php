<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: user_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href=".././mbd/css/mdb.min.css">
    <!--Bootstrap core CSS-->
    <link rel="stylesheet" href=".././mbd/css/bootstrap.min.css">
     <!--Your custom styles (optional)-->
    <link rel="stylesheet" href=".././welcome.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../mbd/css/bootstrap.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../mbd/css/style.css">
</head>



<body  >

    <?php
    require_once "../footer.php";
    $newuserHeader=new display_detes();
    echo $newuserHeader->displaySideMenu();


    ?>
    <h2>Welcome, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?></h2>
    <p>
        You can use this platform to share your content with the kids.
    </p>
    <p>
        Good luck
    </p>
    </main>
    </div>


    </div>


    <section>

        <?php
        echo $newuserHeader->showUserfooter();
        ?>
    </section>



    <script type="text/javascript" src=".././mbd/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src=".././mbd/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src=".././mbd/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src=".././mbd/js/mdb.min.js"></script>




</body>
</html>