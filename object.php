<?php
$user1= array(
    "first_name"=>'zoe',
    "Last_name"=>"thor",
    "phone"=>"111"
);
$user2= array(
    "first_name"=>'champy',
    "Last_name"=>"thor",
    "phone"=>"222"
);
$user3= array(
    "first_name"=>'alex',
    "Last_name"=>"thor",
    "phone"=>"333"
);

$user1['mail']="zoe@e";
$user2['mail']="champy@e";
$user3['mail']="alex@e";

$users=[];
array_push($users , $user1);
array_push($users , $user2);
array_push($users , $user3);
// print_r($users[0])

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>php</title>
  </head>
    <body>
  
 <div class="container p-2">
    <div class="row">
 <?php for($counter=0;$counter<Count($users);$counter++){ ?>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                   <h3> <?php echo  $users[$counter]['first_name'] ?></h3>
                   <h4>  <?php echo  $users[$counter]['Last_name'] ?></h4>
                   <h5> <?php echo  $users[$counter]['phone'] ?></h5>
                   <h6>  <?php echo  $users[$counter]['mail'] ?></h6>
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