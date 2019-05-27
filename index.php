<?php
  date_default_timezone_set('Asia/Kolkata');

  $db = mysqli_connect('localhost', 'root', '', 'ois_management');
 parse_str(unserialize($_GET['test']), $output);
//$Values= unserialize(($_GET['test'])); 
//echo "Firstname:" .$output['Employee_Id'];
echo "created_at:" .$output['created_at'];
$Employee_Id=$output['Employee_Id'];
$date1=$output['created_at'];
global $date1;  
//echo $output['created_at'];
  //$Employee_Id=e($_POST['Employee_Id']);
 // $date1=e($_POST['created_at']);

  $con = mysqli_connect('localhost', 'root', '', 'ois_management');

    if (!$con)
     {
     die('Could not connect: ' . mysqli_error());
     }
             
              // echo "Connections are made successfully::";
              $qry ="SELECT * from user_logins where Employee_Id='$Employee_Id'and created_at='$date1' LIMIT 1";
              $result = mysqli_query($con, $qry);
              if (mysqli_num_rows($result) == 1) {

                  $logged_in_user = mysqli_fetch_assoc($result);
                  $Employee_Name=  $logged_in_user['Employee_Name'];
                  $Designation  =  $logged_in_user['Designation'];
                  // echo $logged_in_user['Employee_Name']; 
                  // echo  $logged_in_user['Designation'];      

              }
              $qry1 ="SELECT * from employees where Employee_Id='$Employee_Id' LIMIT 1";
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
          <!-- <form method="POST" action="" > -->
          <div class="row">
            <div class="col-lg-5"></div>
                                  <?php
                                  if(isset($_POST['emplogin']))
                                  {
                                     $Login_Time= date("Y-m-d h:i:sa");
                                     echo $Login_Time;
                                    $query2 = "UPDATE user_logins SET Login_Time='$Login_Time'  WHERE Employee_Id='$Employee_Id' and created_at='$date1'  LIMIT 1";
                                    $results2 = mysqli_query($db, $query2);
                                  }
                                  ?>
                  <div class="col-lg-1">
                    <div class="btn-group">
                        <form method="POST" action="" >
                      <!-- <button type="button" class="btn btn-primary" name="emplogin">Login</button> -->
                      <input type="submit" class="btn btn-primary emplogin" id="emplogin" name="emplogin" value="Login">
                        </form>
                  </div>
                </div>
                  <div class="col-lg-1">
                    <?php
                      if (isset($_POST['tbreak'])) {
                        $b=$logged_in_user['break_status'];
                       // echo $b;
                        if($b=='out'){
                          echo $b;
                          $out_time_b= date("Y-m-d h:i:sa"); 
                          $query3 = "UPDATE user_logins SET out_time_b='$out_time_b' break_status='in'  WHERE Employee_Id='$Employee_Id' and created_at='$date1'  LIMIT 1";
                          $results3 = mysqli_query($db, $query3);}
                      else{
                          $in_time_b= date("Y-m-d h:i:sa");

                          $query3 = "UPDATE user_logins SET in_time_b='$in_time_b'  break_status='out'  WHERE Employee_Id='$Employee_Id' and created_at='$date1'  LIMIT 1";
                          $results3 = mysqli_query($db, $query3);
                      }
                      //header('location: index.php?Employee_Id='.$Employee_Id.'');
                    }
                    ?>
                      <form method="POST" action="" >
                    <!-- <a class="btn btn-break btn-circle btn-lg rounded-circle tbreak" name="tbreak" href="#"  role="button"><img src="images/tbreak.png" alt="tbreak"></a> -->
                    <input type="submit" class="btn btn-primary tbreak" id="tbreak" name="tbreak" value="tbreak">
                  </form>
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
                      <button type="button" class="btn btn-primary" name="emplogout1" data-toggle="modal" data-target="#exampleModal">
                      Logout
                      </button>
                    </div>
                  </div>
              <!-- </form> -->

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
                    <?php
                                  if(isset($_POST['emplogout']))
                                  {
                                     $Logout_Time= date("Y-m-d h:i:sa");
                                     echo $Logout_Time;
                                    $query2 = "UPDATE user_logins SET Logout_Time='$Logout_Time'  WHERE Employee_Id='$Employee_Id' and created_at='$date1'  LIMIT 1";
                                    $results2 = mysqli_query($db, $query2);
                                  }
                                  ?>
                    <form method="POST" action="" >

                     <input type="submit" class="btn btn-primary emplogout" id="emplogout" name="emplogout" value="Yes">
                    <!-- <a role="button" href="index.php" class="btn btn-primary">Yes</a> -->
                     </form>
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
      $qry ="SELECT * from user_logins where Employee_Id='$Employee_Id'and created_at='$date1' LIMIT 1";
              $result = mysqli_query($con, $qry);
        if (mysqli_num_rows($result) > 0){
            echo"<tr>
              <td>".$logged_in_user['Employee_Id']."</td>
              <td>".$logged_in_user['Employee_Name']."</td>
              <td>".$logged_in_user['Login_Time']."</td>
              <td>".$logged_in_user['out_time_b']."</td>
              <td>".$logged_in_user['in_time_b']."</td>
              <td>".$logged_in_user['out_time_l']."</td>
              <td>".$logged_in_user['in_time_l']."</td>
              <td>".$logged_in_user['out_time_t']."</td>
              <td>".$logged_in_user['in_time_t']."</td>
              <td>".$logged_in_user['Logout_Time']."</td>
              <td>".$logged_in_user['total_hrs']."</td>
            </tr>";
          
        }
      ?>

    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-lg-9">

      </div>
      <div class="col-lg-3">
        <div class="btn-group">

          <a class="btn btn-primary" href="timelist.php?Employee_Id=<?php echo $Employee_Id;?>" role="button">check previous days</a>

          <a class="btn btn-primary" href="timelist.php?Employee_Id=<?php echo $Employee_Id ?>" role="button">check previous days</a>
        </div>
      </div>
    </div>
  </div>

    <?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>
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
?>
