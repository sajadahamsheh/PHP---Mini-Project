<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
    <style>
  <?php include 'profile.css'; ?> 
  </style>

</head>
<?php include 'data.php';?>
<body>

    <!-- <?php    
    $url= $_SERVER['REQUEST_URI'];      
    $id=explode('=',$url);
    $id=$id[1];
    echo $id;
    foreach($data as $k=>$v){
      if($v["id"] ==$id){
        echo $v["name"];
      }
    }
    ?> -->
    <div class="card mb-3" style="max-width:570px ;min-height: 200px  ">
  <div class="row g-0">
    <div class="col-md-4">
      <img style="min-height: 200px ;max-width:190px"
        src="    <?php    
          $url= $_SERVER['REQUEST_URI'];      
          $id=explode('=',$url);
          $id=$id[1];
          
          foreach($data as $k=>$v){
            if($v["id"] ==$id){
              echo $v["image"];
            }
          }
        ?>" 
        alt="..."
        class="img-fluid"
      />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">  
        <?php    
          $url= $_SERVER['REQUEST_URI'];      
          $id=explode('=',$url);
          $id=$id[1];
          
          foreach($data as $k=>$v){
            if($v["id"] ==$id){
              echo $v["name"];
            }
          }
        ?>
    </h5>
        <h6 class="card-title">  Birthday data :
        <?php    
          $url= $_SERVER['REQUEST_URI'];      
          $id=explode('=',$url);
          $id=$id[1];
          
          foreach($data as $k=>$v){
            if($v["id"] ==$id){
              echo $v["birthday"];
            }
          }
        ?>
    </h6>
        <p class="card-text">
        <?php    
          $url= $_SERVER['REQUEST_URI'];      
          $id=explode('=',$url);
          $id=$id[1];
          
          foreach($data as $k=>$v){
            if($v["id"] ==$id){
              if(isset($v["projects"])){
            

                foreach($v["projects"]as $g=>$h){
                  if($h["is_compleated"]=="yes"){
                    print_r ("Project finished: ".$h["project_name"]) ;
                    echo "<br>";
                }
                  
                }}
             
            }
          }
        ?>
      
        </p>
        
        <a href="<?php    
          $url= $_SERVER['REQUEST_URI'];      
          $id=explode('=',$url);
          $id=$id[1];
          
          foreach($data as $k=>$v){
            if($v["id"] ==$id){
              echo $v["birthday"];
            }
          }
        ?>"><i style="width:50px" class="fab fa-github"></i></a> 
        
    
      <br>
        <!-- <p class="card-text"> -->
          
      </div>
    </div>
  </div>
</div>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.1.0/mdb.min.js"
></script>
</body>
</html>