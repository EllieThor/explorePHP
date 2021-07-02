<?php
$title= "php test!";
$fName= "zoe";
$lName= "thor";
$a=10;
$b=2;
$num=$a+$b;
$arr=[12,"12",'<h6>12</h6>',58,65,"yay"];
echo $num;

for($counter=0;$counter<Count($arr);$counter++){
echo $arr[$counter]."<br/>";
}
?>;


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
  </head>
  <body>
  
    <h3>nun1=<?php  echo $a ?></h3>
    <h3>nun2=<?php echo $b ?></h3>
    <h1>sum=<?php echo $num ?></h1>
    <h6>sum=<?php echo $fName." ".$lName; ?></h6>
 <div class="container">
    <div class="row">
 <?php for($counter=0;$counter<Count($arr);$counter++){ ?>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <?php echo  $arr[$counter] ?>
                </div>
            </div>
        </div>
  <?php } ?>
    </div>
 </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>