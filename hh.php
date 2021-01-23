<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
    <style>
  
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/miniProject/index.php">Trainees Pagee </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Trainee Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/miniProject/hh.php">Attendance Report Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="http://localhost/miniProject/s.php">Dashboard page </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="http://localhost/miniProject/galary.php">Academy Gallery </a>
      </li>
    </ul>
  </div>
</nav>

<?php include 'data.php';?>
<table class="table" style="margin-top:1rem; " >
<?php
      
      foreach ($data as $k=>$v){
        //   var_dump ($v["attendance"]);
        if(isset($v["attendance"])){
            

            foreach($v["attendance"]as $g=>$h){
                $checkIn=explode(' ',$h["check_in"]);
            //    var_dump ($checkIn);
                $checkIn=explode(':',$checkIn[3]);
                $checkOut=explode(' ',$h["check_out"]);
                $checkOut=explode(':',$checkOut[3]);
                // var_dump ($checkOut[0]);
                // var_dump ($checkOut[1]);
                if ($checkOut[0]-$checkIn[0] < 8){
                   
                    $style="table-danger";

                }elseif($checkOut[0]-$checkIn[0] == 8){
                    // echo "true";
                    
                    if($checkOut[1]< $checkIn[1]){
                        $style="table-danger";
                    }elseif($checkOut[1]==$checkIn[1]){
                        $style="table-success";
                        // echo "true";
                    }
                    else {
                        $style="table-success"; 
                    }
                }else{
                    $style="table-success"; 
                }
                echo '<tr class='.$style.' >
               
                <th scope = "row">'.$v["id"].'</th>
                <td >'.$v["name"].'</td>
                <td >'.$h["check_in"].'</td>
                <td >'.$h["check_out"].'</td>
                
                 </tr>';
            }
        }

      }
      
      ?> 
      </table>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
