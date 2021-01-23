 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
  <title>Document</title>

  <style>
  <?php include 'style.css'; ?> 
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


<?php include 'data.php';
// print_r($data);
?>
<div class ="row"> 
<?php for ( $i=0;$i < count($data) ;$i++) :?>
    <div  class="col-sm-3">
   <div class="card" style="width: 18rem;max-height: 378px ">
    <img style="max-width:570px ; max-height: 190px " src="<?php echo $data[$i]['image']  ?>" class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title"><?php echo $data[$i]["name"] ?></h5>
      <p  class="card-text">Birthday <?php echo $data[$i]["birthday"] ?></p>
      
      <a href="<?php echo $data[$i]["linkedin"] ?>"><i class="fab fa-linkedin-in"></i></a> 
      <a href="<?php  echo $data[$i]["github account"] ?>"><i style="width:50px" class="fab fa-github"></i></a> 
      <br>
      <a href='http://localhost/miniProject/profile.php/?id=<?php echo $data[$i]["id"] ?>'> read more</a>
      
     </div>
   </div>
  </div>  
  <?php endfor; ?>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"> </script>



</body>
</html>