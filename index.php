<?php
date_default_timezone_set('Asia/Kolkata');

$db = mysqli_connect('localhost', 'root', '', 'ois_management');

//include('functions.php');
//$Employee_Name1=$_GET['Employee_Id'];
$Employee_Id=e($_GET['Employee_Id']);

/*echo $Employee_Id;*/
$con = mysqli_connect('localhost', 'root', '', 'ois_management');

                           if (!$con)
                             {
                             die('Could not connect: ' . mysqli_error());
                             }

                       /*echo "Connections are made successfully::";*/
                       $qry ="SELECT * from user_table where Employee_Id='$Employee_Id' LIMIT 1";
                       $result = mysqli_query($con, $qry);
  if (mysqli_num_rows($result) == 1) {
                         $logged_in_user = mysqli_fetch_assoc($result);
                         //$test=$logged_in_user['Employee_Name'];
                        // echo $test;
                      $Employee_Name=  $logged_in_user['Employee_Name'];
                      $Designation=$logged_in_user['Designation'];


}
 $qry1 ="SELECT * from attendance where Employee_Id='$Employee_Id' LIMIT 1";
 $result1 = mysqli_query($con, $qry1);
        if (mysqli_num_rows($result1) == 1) {
          $logged_in_users = mysqli_fetch_assoc($result1);
                $image=$logged_in_users['image'];
              }
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
    <link rel="stylesheet" type="text/css" href="css/date.css">
    <title>Hello, world!</title>
    <!-- date  -->
    <link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="moment.min.js"></script>
    <script type="text/javascript" src="daterangepicker.js"></script>
  </head>
  <body>
    <!-- Main navigation -->
    <header>
      <!-- Full Page Intro -->
      <div class="view" style="background-image: url('images/slider.png'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
          <div class="row">
            <!--Grid column-->
            <div class="col-md-11 white-text text-center text-md-left mt-xl-3 mb-5">
              <img src="images/oislogo.png" alt="Logo">
            </div>
            <div class="col-md-1 mt-xl-2 mb-5">
              <!-- <div class="btn-group">
             <a class="btn btn-success" href="login.php" role="button">Home</a>
              </div> -->
              <div class="btn-group">
                <a class="btn btn-primary" href="functions.php?logout=logout;" role="button">Logout</a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <img class="rounded-circle" src="admin/upload/<?php echo $image; ?>" alt="username">
              </div>
              <div class="col-md-8 txt-emp">
                <!-- <h3>Employee Name</h3> -->
                <h3><?php echo $Employee_Name; ?></h3>
                <p><?php echo $Designation;?></p>
              </div>
            </div>
          </div>
          <!-- date -->
          <form method="POST" action="" >
          <div class="row">
            <div class="col-lg-5"></div>

                  <div class="col-lg-1">
                    <div class="btn-group">
                      <!-- <a class="btn btn-primary emplogin" id="emplogin" name="emplogin" href="#" role="button">Login</a> -->
                      <button type="button" class="btn btn-primary " name="emplogin">Login</button>
                      <!-- <input type="submit" class="btn btn-primary emplogin"id="emplogin" name="emplogin" value="Login"> -->
                  </div>
                </div>
                  <div class="col-lg-1">
                    <a class="btn btn-break btn-circle btn-lg rounded-circle tbreak" name="tbreak" href="#" role="button"><img src="images/tbreak.png" alt="tbreak"></a>
                  </div>
                  <div class="col-lg-1">
                    <a class="btn btn-primary btn-circle btn-lg rounded-circle lunch" name="lunch" href="#" role="button"><img src="images/lunch.png"></a>
                  </div>
                  <div class="col-lg-1">
                    <a class="btn btn-break btn-circle btn-lg rounded-circle cbreak" name="cbreak" href="#" role="button"><img src="images/cbreak.png"></a>
                  </div>
                  <div class="col-lg-1">
                    <div class="btn-group">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary emplogout" name="emplogout" data-toggle="modal" data-target="#exampleModal">
                      Logout
                      </button>
                    </div>
                  </div>
              </form>

            <div class="col-lg-2">
              <div class="input-group mb-3">
                <label>Current Date</label>
                <span class="date-box" id="date"></span>
              </div>
            </div>
          </div>
          <!-- popup modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure do you want to logout?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a role="button" href="login.php" class="btn btn-primary">Yes</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- //end popup modal -->
        </div>
      </div>
      <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->

    <!-- table -->

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col" rowspan="2">Emp ID</th>
        <th scope="col" rowspan="2">Employee name</th>
        <th scope="col" rowspan="2">Login</th>
        <th scope="col" colspan="2">Break</th>
        <th scope="col" colspan="2">Lunch</th>
        <th scope="col" colspan="2">Break</th>
        <th scope="col" rowspan="2">Logout</th>
        <th scope="col" rowspan="2">Total hrs</th>
      </tr>
      <tr>
        <th scope="col">Out time</th>
        <th scope="col">In time</th>
        <th scope="col">Out time</th>
        <th scope="col">In time</th>
        <th scope="col">Out time</th>
        <th scope="col">In time</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //  $sql1 ="SELECT * from user_table where Employee_Name='$Employee_Id' LIMIT 1";
      //$result1 = mysqli_query($con, $sql1);

        if (mysqli_num_rows($result) > 0){
        //  while ($row = $result -> fetch_assoc()) {

            echo"<tr>
              <td>".$logged_in_user['Employee_Id']."</td>
              <td>".$logged_in_user['Employee_Name']."</td>
              <td>".$logged_in_user['Login_Time']."</td>
              <td>12:15</td>
              <td>12:30</td>
              <td>01:40</td>
              <td>02:15</td>
              <td>04:20</td>
              <td>04:35</td>
              <td>".$logged_in_user['Logout_Time']."</td>
              <td>07:00</td>
            </tr>";
          //}
        }
      ?>

    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-lg-10">

      </div>
      <div class="col-lg-2">
        <div class="btn-group">
          <a class="btn btn-primary" href="timelist.php?Employee_Id=<?php echo $Employee_Id ?>" role="button">check previous days</a>
        </div>
      </div>
    </div>
  </div>


    <script>
      n =  new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    </script>
    <!-- date -->
    <script src="js/date.js"></script>

    <!-- Optional JavaScript -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
<?php
function e($val){
  global $db;
  return mysqli_real_escape_string($db, trim($val));
}
if (isset($_POST['emplogin'])) {
  $date_clicked=date("h:i:sa");
  echo "kfgriythflrhtliu".$date_clicked."";
  //   $Login_Time= date("h:i:sa");
  //  echo "hello";
  // $query1 = "UPDATE user_table SET Logout_Time='$Login_Time'  WHERE 'Employee_Id'='$Employee_Id' LIMIT 1";
  // $results1 = mysqli_query($db, $query1);

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
