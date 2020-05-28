<?php



$con = mysqli_connect('localhost','root',''); // connect to database
mysqli_select_db($con, 'lab6');

$id= $_POST['id'];

$Model=$_POST['Model'];
$Power=$_POST['Power'];
$Price=$_POST['Price'];
$Fuel=$_POST['Fuel'];

    $query="insert into car values( '" .$id."','". $Model ."' ,'" .$Power ."', '". $Fuel."', '" . $Price ."' )";
    mysqli_query($con,$query);
    
  

$con->close();
?>

