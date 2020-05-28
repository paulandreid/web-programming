<?php
$con = mysqli_connect('localhost','root',''); // connect to database
mysqli_select_db($con, 'lab6');

$id= $_POST['id'];
$Model=$_POST['Model'];
$Power=$_POST['Power'];
$Price=$_POST['Price'];
$Fuel=$_POST['Fuel'];
$query="update car set  Model='". $Model . "' ,Power='".$Power . "' ,Fuel='". $Fuel. "' ,Price='".$Price . "' where id='".$id."'";

$result=mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
    echo "1";
else echo "0";

    //$query="update car set values(' $id',' $Model' ,'$Power','$Price') where car=";

    //$stmt = $mysqli->prepare("UPDATE course SET Model= ? , Power= ? , Price= ?   WHERE car= ?");
//$stmt->bind_param('ssss', $Model, $Power,$Price,$car);


//$stmt->execute();


//$stmt->close();  


$con->close();
?>