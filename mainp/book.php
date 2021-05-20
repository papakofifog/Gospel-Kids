
<!doctype html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Home</title>
    <!-- MDB icon -->
      <link rel="icon" href="./mbd/img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href=".././mbd/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
      <link rel="stylesheet" href=".././mbd/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
      <link rel="stylesheet" href=".././mbd/css/style.css">
      <link rel="javaScrpt" href=".././verify_form.js">
    </head>


    <body style="padding:10px">

      <?php
        require ".././footer.php";
        $header1= new display_detes();
        echo $header1->display_headeruserp();
      ?>


<?php
session_start();
// Include config file
require_once "../managedb/connect_db.php";
include_once '../getID3-master/getid3/getid3.php';




// Define variables and initialize with empty values
$title = $author = $description=$link= "";
$title_err = $author_err= $description_err =$link_err= "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['titlevideo'])){
        $title_err='please write name of your title';
    }else{
        $title=$_POST['titlevideo'];
    }
    if (empty($_POST['vidAuthor'])){
        $author_err='please write add the name of the Author';
    }else {
        $author=$_POST['vidAuthor'];
    }
    if(empty($_POST['vides'])){
        $description_err= 'The description can not be left empty';
    }else{
        $description=$_POST['vides'];
    }

    /*if(empty($_POST['userfile'])){
        $path = __DIR__.'../video_uploads/';
        $img_name = $_FILES['userfile']['name'];
        $temp_name = $_FILES['userfile']['tmp_name'];
        $uploadOk=1;
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($temp_name,$path. $img_name)) {
                $succesmessage="File is valid, and was successfully uploaded.\n" ;
            } else {
                $failuremessage= "Possible file upload attack!\n";
            }
        }
    }
    */
    if (empty($_POST['videlink'])){
        $link_err= 'paste the link to your video hear';
    }else{
        $link=$_POST['videlink'];
    }

    $details="Video side: 4MB, Video Legnth:20mins ";


    //echo 'Here is some more debugging info:';
    //print_r($_FILES);





    if(empty($title_err) && empty($author_err) ){
        // Prepare a select statement
        $sql = 'INSERT INTO CVideos (title,author,description,fileloc,details,date_time_uploaded) VALUES (?,?,?,?,?,? )';


        $db=new Manage_database();
        $mysqli= $db->connectdb();
        if($stmt =$mysqli->prepare($sql)){
            echo "sisi2";
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssss", $param_title,$param_author,$param_description,$param_fileloc,$param_details,$param_datetimeuploaded);

            // Set parameters
            $param_title= $title;
            $param_author=$author;
            $param_description=$description;
            $param_fileloc=$link;
            $param_duration=$details;
            $param_datetimeuploaded=date("F j, Y, g:i a");

            // Attempt to execute the prepared statement
            if($stmt->execute() && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ){
                // Redirect to login page
                header("location: ../login/user_welcompage.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }


            // Close statement
            $stmt->close();
        }
    }

}



?>



      <main class="mt-5">

          <form action="book.php" method="post" enctype="multipart/form-data>
              <div class="container-fluid">
                  <div class="form-group" <?php echo (!empty($title_err)) ? 'has-error' : ''; ?>>
                      <label for="titlevideo">Video Title</label>
                      <input type="text" class="form-control" id="titlevideo" placeholder="Enter Videotitle" name="titlevideo" required>
                      <span class="help-block"><?php echo $title_err; ?></span>
                  </div>
                  <div class="form-group" <?php echo (!empty($author_err)) ? 'has-error' : ''; ?>>
                      <label for="vidAuthor">Author name</label>
                      <input type="text" class="form-control" id="vidAuthor" placeholder="Author name" name="vidAuthor" required>
                      <span class="help-block"><?php echo $author_err; ?></span>
                  </div>

                  <div class="form-group" <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>>
                      <label for="vides">Video Description</label>
                      <input type="text" class="form-control" id="vides" placeholder="Video Description here" name="vides" required>
                      <span class="help-block"><?php echo $description_err; ?></span>
                  </div>
                 <!-- <div class="form-group" >
                      <label for="inputFile">Upload the video File here</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="userfile">
                                <label class="custom-file-label" for="userfile">Choose file</label>
                            </div>
                        </div>
                  </div>-->
                 <div class="form-group" <?php echo (!empty($link_err)) ? 'has-error' : ''; ?>>
                     <label for="vides">Link to the video</label>
                    <input type="text" class="form-control" id="videlink" placeholder="Video link here" name="videlink" required>
                    <span class="help-block"><?php echo $link_err; ?></span>
                 </div>

              </div>
                <div class="btn">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
          </form>























      </main>










    

      <script type="text/javascript" src=".././verifyform.js"></script>
    </body>
    <footer>
    <?php
        require_once '.././footer.php';

        $footer2= new display_detes();
        echo $footer2->display_footerlog();
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
    </footer>
</html>



