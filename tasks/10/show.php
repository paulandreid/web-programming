<?php



$con = mysqli_connect('localhost','root',''); // connect to database
mysqli_select_db($con, 'lab6');

    $sql="SELECT * FROM car";
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($result)) {
      echo ' <p align=center id= "'. $row['id'] .'"> id: ' . $row['id'] . '||   Model: ' 
        . $row['Model']. ' ||  Power:'. $row['Power'] . ' ||  Fuel ' . $row['Fuel']
        . ' ||  Price ' . $row['Price'] .'<button onclick="pre_update('. $row['id'] .');">  Edit </button>
          <button onclick="ajax_delete('. $row['id'] .');">  Delete </button></p>';
    }

$con->close();
?>

