<?php
// Include config file
require_once ".././managedb/connect_db.php";
include_once '../getID3-master/getid3/getid3.php';


// Define variables and initialize with empty values
$title = $author = $description= "";
$title_err = $author_err= $description_err = "";

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
        $description_err= $_POST['vides'];
    }else{
        $description=$_POST['vides'];
    }
    if(empty($_POST['inputFile'])){
        $video_err='Please add a video';
    }else {
        $getID3=new getID3();
        $file = $getID3->analyze($_POST['inputFile']);
        $details= "Duration: ".$file['playtime_string'].
            " / Dimensions: ".$file['video']['resolution_x']." wide by ".$file['video']['resolution_y']." tall".
            " / Filesize: ".$file['filesize']." bytes";
    }

    if(empty($title_err) && empty($author_err) && empty($description_err)){
        // Prepare a select statement
        $sql = 'INSERT INTO CVideos (title,author,description,details,date_time_uploaded) VALUES ( ?,?,?,?,?,?)';

        echo "sisi";
        if($stmt = $mysqli->prepare($sql)){
            echo "sisi2";
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s,s,s,s,s,s", $param_title,$param_author,$param_description,$param_details,$param_duration,$param_datetimeuploaded);

            // Set parameters
            $param_title= $title;
            $param_author=$author;
            $param_description=$description;
            $param_duration=$details;
            $param_datetimeuploaded=date("F j, Y, g:i a");

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: ../login/user_welcomepage.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

}



?>
