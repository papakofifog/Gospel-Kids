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
                            <a class="nav-link pl-0 text-nowrap" href="../login/user_welcompage.php"><i class="fa fa-bullseye fa-fw"></i> <span class="font-weight-bold">Gospel Kids</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="../login/reset-password.php"><i class="fa fa-key fa-fw"></i> <span class="d-none d-md-inline">Change Password</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="../login/logout.php"><i class="fa fa-cog fa-fw"></i> <span class="d-none d-md-inline">logout</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="./book.php"><i class="fa fa-plus codeply fa-fw"></i> <span class="d-none d-md-inline">Add a video</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="./liked_videos.php"><i class="fa fa-star codeply fa-fw"></i> <span class="d-none d-md-inline">Explore videos</span></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </aside>
        <main class="col bg-faded py-3 flex-grow-1">

<h2>Hello, <b><?php echo htmlspecialchars($_SESSION["firstname"]); ?>, explore the available videos</h2>
<?Php
require_once "../managedb/connect_db.php";
$vidsql= "SELECT title,author,description,details,fileloc,date_time_uploaded,number_views FROM CVideos" ;
$newvid=new Manage_database();
$conn=$newvid->connectdb();
$result=$conn->query($vidsql);

if ($result->num_rows>0){

    while ($row = $result->fetch_assoc()) {



?>






    <p><?Php echo $row["title"]?></p>
        <iframe width="420" height="315"
                src=<?Php echo $row["fileloc"]?>>
        </iframe>
    <p><?Php echo "By ".$row["author"]?></p>
    <?Php
    }
    }
    else {
        echo 'There are no videos available';
    }

    ?>

</main>

<p>

</p>

</div>


</div>






<script type="text/javascript" src=".././mbd/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src=".././mbd/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src=".././mbd/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src=".././mbd/js/mdb.min.js"></script>




</body>
</html>



<?php





?>