<?php
//connect to MySQL
$con = mysqli_connect("localhost","root","root","shoutit");

//Test Connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQl'.mysqli_connect_error();
}
?>