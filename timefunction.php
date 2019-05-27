<?php
date_default_timezone_set('Asia/Kolkata');
$Employee_Id=$_GET['Employee_Id'];
session_start();
  // connect to database
$db = mysqli_connect('localhost', 'root', '', 'ois_management');
 if (!$db)
     {
     die('Could not connect: ' . mysqli_error());
     }
if (isset($_POST['emplogin'])) {
   $Login_Time= date("h:i:sa");
   $date1=date("Y-m-d");
   $query1 = "UPDATE user_logins SET Login_Time='$Login_Time'  WHERE Employee_Id=$Employee_Id and created_at=$date1";
   $results1 = mysqli_query($db, $query1);
   header('location: index.php?Employee_Id='.$Employee_Id.'');
  }
 if (isset($_POST['tbreak'])) {
      $b=0;
      $out_time_b= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);
    header('location: index.php?Employee_Id='.$Employee_Id.'');
  }
  if (isset($_POST['lunch'])) {
      $Login_Time= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);
    header('location: index.php?Employee_Id='.$Employee_Id.'');
  }
  if (isset($_POST['cbreak'])) {
      $Login_Time= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
    $results1 = mysqli_query($db, $query1);
    header('location: index.php?Employee_Id='.$Employee_Id.'');
  }
   if (isset($_POST['emplogout'])) {
        $Logout_Time= date("h:i:sa");
      $query1 = "UPDATE user_table SET Logout_Time='$Logout_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
      $results1 = mysqli_query($db, $query1);
      header('location: index.php?Employee_Id='.$Employee_Id.'');
    }
 ?>
