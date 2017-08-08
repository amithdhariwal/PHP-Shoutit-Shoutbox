<?php
include "database.php";

//check if form was submitted
if(isset($_POST['submit'])){
    $user= mysqli_real_escape_string($con, $_POST['user']);
    $message= mysqli_real_escape_string($con, $_POST['msg']);

    //set time zone
    date_default_timezone_set('America/New_York');
    $time = date('h:i:s',time());
    //validate input
    if(!isset($user) || $user == '' || !isset($message) || $message == ''){
        $error = "please fill in your name and a message";
        header("Location: index.php?error=".urlencode($error));
        exit();

    }else{

        $query = "INSERT INTO shouts(user ,msg,  time)
                  VALUES ('$user','$message','$time')";

        if(!mysqli_query($con,$query)){
           die('Error: '.mysqli_error($con));
        }else{
            //echo 'test';
            //$str='index.php';
            //echo $message.'----'.$user;
            header('Location:index.php' );
            exit();
        }
    }
}
?>