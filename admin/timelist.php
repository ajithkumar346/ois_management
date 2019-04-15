<?php
$con = mysqli_connect('localhost', 'root', '', 'ois');

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
    <!-- date -->
    <div class="container">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-2">
          <div class="form-group">
                <label for="startDate">Start Date</label>
                <input type="text" class="form-control" id="startDate" value="07/01/2015">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="form-group">
            <label for="endDate">End Date</label>
            <input type="text" class="form-control" id="endDate" value="07/15/2015">
          </div>
        </div>
        <div class="col-lg-2">
          <div class="input-group mb-3">
            <label>Current Date</label>
            <span class="date-box" id="date"></span>
          </div>
        </div>
      </div>
    </div>

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
      <tr>
        <th scope="row">OIS00037</th>
        <td>Ravi Kiran</td>
        <td>11:30</td>
        <td>12:15</td>
        <td>12:30</td>
        <td>01:40</td>
        <td>02:15</td>
        <td>04:20</td>
        <td>04:35</td>
        <td>06:40</td>
        <td>07:00</td>
      </tr>
    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-lg-11">
    
      </div>
      <div class="col-lg-1"> 
        <div class="btn-group">
          <a class="btn btn-primary" href="index.php" role="button">Back</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
