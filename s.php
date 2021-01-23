<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <!-- <th scope="col">Check in</th>
      <th scope="col">Check out</th> -->
    </tr>
  </thead>
  <tbody>
    <?php for ( $i=0;$i < count($data) ;$i++) :?>
    <tr>
      <th scope="row"><?php echo  $data[$i]["id"];?></th>
      
     
      <td><?php echo $data[$i]["name"];?></td>
      <!-- <td><
          </td>
      <td>@mdo</td> -->
      </tr>
      
      <?php endfor; ?>
  </tbody>
</table>

<?php  
$sum=0;
for($i=0;$i < count($data); $i++){
    $sum=$sum+1;
    
}
echo 'The num of trainee is '.$sum;
?>
<br>
<?php
$s=0;  
foreach($data as $k=>$v){
    // var_dump ($v);
    if(isset($v["projects"])){
        foreach($v["projects"]as $g=>$h){
            // var_dump ($h ["project_name"]);
            if($h["is_compleated"]=="yes"){
                $s=$s+1;
            }
        }

    }
}
echo 'The num of completed project '.$s;
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>