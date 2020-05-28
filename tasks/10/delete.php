<?php
$con = mysqli_connect('localhost','root',''); // connect to database
mysqli_select_db($con, 'lab6');

$id= $_POST['id'];


$query="DELETE FROM `car` WHERE `id`= ".$id;

mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0 )
    echo "1";
else echo "0";
$con->close();
?>