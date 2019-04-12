<?php

  session_start();
  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'ois_management');

  // variable declaration
  $Employee_Name = "";
  $email    = "";
  $errors   = array();

  // call the login() function if register_btn is clicked
  if (isset($_GET['login_btn'])) {
    login();

  }
//print_r($_GET);exit;
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
   header("location: login.php");
  }
// LOGIN USER
  function login(){
    global $db, $errors;

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
        //  echo $test;
          header('location: index.php?Employee_Id= '.$Employee_Id.'');
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
