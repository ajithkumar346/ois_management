<?php
$con = mysqli_connect('localhost', 'root', '', 'ois_management');

                           if (!$con)
                             {
                             die('Could not connect: ' . mysql_error());
                             }

                       // echo "Connections are made successfully::";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Main navigation -->
    <header>
      <!-- Full Page Intro -->
      <div class="view" style="background-image: url('images/bg.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container">
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft">
              <img src="images/oislogo.png" alt="Logo">

              <!--  <a class="btn btn-warning " style="float:right;" href="#" role="button">Export</a>-->

              <br><br><br>
              <h1 class="h1-responsive font-weight-bold mt-sm-5 txt-title">Employee LogIn </h1><br>
              <!-- DropDown -->
              <form action="functions.php">
                <div class="input-group mb-4 txt-box">

                <?php

                $query= "SELECT * FROM attendance";
                 $result = mysqli_query($con, $query);
                 echo "
                 <div class=\"input-group-prepend\">
                  <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-user\"></i></span>
                 </div>
                  <select class=\"btn btn-secondary dropdown-toggle dropbtn\" name=\"Employee_Name\" id=\"my_select\">";

                  echo "<option class=\"dropdown-menu\">Select your name</option>";
                  while ($row = mysqli_fetch_array($result)) {

                    echo "<option class=\"dropdownmen Employee_Name\" name='" . $row['Employee_Name'] . "' value='" . $row['Employee_Name'] . "' >" . $row['Employee_Name'] . "</option>";
                    echo " <br>";
                  }
                     echo "</select>";

                    ?>
                </div>

              <div class="input-group mb-4 txt-box">
              <?php
              echo "
                <div class=\"input-group-prepend\">
                  <span class=\"input-group-text\" id=\"basic-addon1\"><i class=\"fas fa-key\"></i></span>
                </div>";
                echo "<input type=\"Password\" class=\"form-control Password\" name=\"Password\" value='". $row['Password']."' placeholder=\"Password\" aria-label=\"Password\" aria-describedby=\"basic-addon1\" style=\"max-width: 300px;\">" ;
                ?>
              </div>
              <!-- <a class="btn btn-primary" name="login_btn">Login</a> -->
              <input type="submit" class="btn btn-primary login-btn" name="login_btn" value="Login">
              <!-- <a class="btn btn-primary login_btn" href="index.php">Login</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
