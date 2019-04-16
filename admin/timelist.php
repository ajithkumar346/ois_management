<?php
$Employee_Id=$_GET['Employee_Id'];

$con = mysqli_connect('localhost', 'root', '', 'ois_management');

                           if (!$con)
                             {
                             die('Could not connect: ' . mysql_error());
                             }

                       /*echo "Connections are made successfully::";*/
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
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light mb-3">
      <a class="navbar-brand" href="index.php?Employee_Id=<?php echo $Employee_Id;?>">
        <img src="images/oislogo.png" height="30" class="d-inline-block align-top" alt="">
      </a>
    </nav>

    <!-- Cards -->
    <div class="container mt-3">
      <div class="row">
      <?php
      //include_once("db_connect.php");
      $sql = "SELECT Employee_Id, Employee_Name, Designation, Password, image FROM employees";
      $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
      while( $record = mysqli_fetch_assoc($resultset) ) {
        $image=$record['image'];
        $Employee_Id1 =$record['Employee_Id'];
      ?>
      
        <div class="col-sm-3">
          <div class="card">
            <img src="upload/<?php echo $image; ?>" class="card-img-top" alt="Emp Name">
            <div class="card-body">
              <h5 class="card-title"><?php echo $record['Employee_Name']; ?></h5>
              <a href="empatt.php?Employee_Id=<?php echo $Employee_Id1 ?>" class="btn btn-primary">Attendance list</a>
            </div>
          </div>
        </div>
        <?php } ?>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
