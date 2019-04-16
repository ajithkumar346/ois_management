<?php
date_default_timezone_set('Asia/Kolkata');
$Employee_Id=$_GET['Employee_Id'];
  session_start();
  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'ois_management');

    if (isset($_POST['emplogin'])); {
  /*$date_clicked=date("h:i:sa");
  echo "kfgriythflrhtliu".$date_clicked."";*/
    $Logout_Time= date("h:i:sa");

$query1 = "UPDATE user_table SET Login_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
   $results1 = mysqli_query($db, $query1);
    unset($_SESSION['user']);
   header("location: index.php?Employee_Id='.$Employee_Id.'");
  }

 if (isset($_GET['emplogout'])) {
      $Logout_Time= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Logout_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);
  }
  if (isset($_GET['emplogin'])) {
      $Login_Time= date("h:i:sa");
    //  echo "hello";
    $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);

  }
  if (isset($_GET['tbreak'])) {
      $Login_Time= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);
  }
 ?>
