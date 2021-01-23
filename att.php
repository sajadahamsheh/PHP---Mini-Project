<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include 'data.php';?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Check in</th>
      <th scope="col">Check out</th>
    </tr>
  </thead>
  <tbody>
    <?php for ( $i=0;$i < count($data) ;$i++) :?>
    <tr>
      <th scope="row"><?php echo  $data[$i]["id"];?></th>
      
     
      <td><?php echo $data[$i]["name"];?></td>
      <td><?php  
       foreach($data as $k=>$v){
                        //  print_r ($k);
                        if(isset($v["attendance"])){
                            echo $v["attendance"];
                        }
                //         foreach($v as $key=>$val){
                //             if ($key==="attendance"){
                //             // echo $key;
                //                 // var_dump( $val);

                //                 // foreach($val as $k2=>$v2){
                //                 //     var_dump( $v2['check_in']);
                                    
                //                 //     // foreach($v2 as $ke=>$vl){
                //                 //     //     if ($ke=="check_in"){
                //                 //     //         $pieces = explode("' '", $vl);
                //                 //     //         var_dump ($pieces);
                //                 //     //         for($j=0;$j < count($data);$j++){
                //                 //     //             if($i==$j){
                //                 //     //                     print_r ($pieces[0][1]);
                //                 //     //                         // echo $vl;
                //                 //     //                     }
                //                 //     //         }
                //                 //     //                 // foreach($ke as $kk => $vv){
                //                 //     //                     //     echo ($kk);
                //                 //     //                     // }
                //                 //     //     }
                //                 //     // }
                //                 // }
                //             }

                //         }    
                // } 
      ?> </td>
      <td>@mdo</td>
      </tr>
      <?php endfor; ?>
    <!-- <tr>
      <th scope="row"><?php echo  $data[0]["id"];?></th>
      <td><?php echo $data[0]["name"];?></td>
      <td>Otto</td>
      <td>@mdo</td>
      </tr> -->
  
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>