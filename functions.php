<?php
date_default_timezone_set('Asia/Kolkata');
  session_start();
  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'ois_management');

  // variable declaration
  $Employee_Name = "";
  $Login_Time    = "";
  $errors   = array();
global $Login_Time;
  // call the login() function if register_btn is clicked
  if (isset($_GET['login_btn'])) {
    global $Login_Time;

    login();
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    $Logout_Time= date("h:i:sa");
    $query1 = "UPDATE user_table SET Logout_Time='$Logout_Time'  WHERE 1";
    $results1 = mysqli_query($db, $query1);
    unset($_SESSION['user']);
   header("location: login.php");
  }
// LOGIN USER
  function login(){
    global $db, $errors;
    $Login_Time= date("h:i:sa");
  //  echo $Login_Time;
    // grap form values
    $username = e($_GET['Employee_Name']);
    $password = e($_GET['Password']);
    //echo($username);
    // make sure form is filled properly
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
      $password = ($password);

      $query = "SELECT * FROM attendance WHERE Employee_Name='$username' AND Password='$password' LIMIT 1";
      $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) { // user found
        // check if user is admin or user
        $logged_in_user = mysqli_fetch_assoc($results);

          $_SESSION['user'] = $logged_in_user;
          $_SESSION['success']  = "You are now logged in";
          $Employee_Id=$logged_in_user['Employee_Id'];
          if ($username=='Santosh') {
            // code...
            header('location: admin/index.php?Employee_Id='.$Employee_Id.'');
          }else {
            // code...
            echo $Login_Time;
            $query1 = "UPDATE user_table SET Login_Time='$Login_Time'  WHERE 1";
            $results1 = mysqli_query($db, $query1);

         header('location: index.php?Employee_Id= '.$Employee_Id.'');
        //  echo "<script>setTimeout(\"location.href = 'index.php?Employee_Id='.$Employee_Id.'';\",1000);</script>";
          }
        //  header('location: index.php?Employee_Name= '.$username.'');
        //  echo "<script>setTimeout(\"location.href = 'index.php?Employee_Name= '.$username.'';\",1000);</script>";
      }else {
        /*array_push($errors, "Wrong username/password combination");*/
          echo '<script language="javascript">';
          echo 'alert("Wrong Password")';
          echo '</script>';
          echo "<script>setTimeout(\"location.href = 'login.php';\",10);</script>";
      }
    }
  }
  function isLoggedIn()
  {
    if (isset($_SESSION['user'])) {
      return true;
    }else{
      return false;
    }
  }

  function isAdmin()
  {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
      return true;
    }else{
      return false;
    }
  }

  // escape string
  function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
  }

  function display_error() {
    global $errors;

    if (count($errors) > 0){
      echo '<div class="error">';
        foreach ($errors as $error){
          echo $error .'<br>';
        }

      echo '</div>';
    }
  }
  ?>
