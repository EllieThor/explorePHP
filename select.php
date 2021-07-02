<?php
    include 'connect.php';
    $teamName="";
  
    
   
   if(isset($_GET['teamName']))
   $teamName=$_GET['teamName'];


    $sql = $teamName == "" ? "SELECT * FROM games" : "SELECT * FROM games WHERE TeamA || TeamB LIKE '%$teamName%'";
    $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysqli_error());
    $games = [];

    while($row = mysqli_fetch_assoc($result))
    {   array_push($games,$row); }

    
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
        <form action="">
            <div class="mb-3">
                <label for="teamName" class="form-label">Team Name</label>
                <input type="text" name="teamName" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TeamA</th>
      <th scope="col">TeamB</th>
      <th scope="col">ScoreTeamA</th>
      <th scope="col">ScoreTeamB</th>
      <th scope="col">Category</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php for($counter=0;$counter<Count($games);$counter++){ ?>
<tr>
    <th scope="row"><?php echo  $counter+1 ?></th>
    <td> <?php echo  $games[$counter]['TeamA'] ?></td>
    <td> <?php echo  $games[$counter]['TeamB'] ?></td>
    <td> <?php echo  $games[$counter]['ScoreTeamA'] ?></td>
    <td> <?php echo  $games[$counter]['ScoreTeamB'] ?></td>
    <td> <?php echo  $games[$counter]['Category'] ?></td>
    <td><?php echo  $games[$counter]['Date'] ?></td>
</tr>         
  <?php } ?>
    
    
  </tbody>
</table>
 
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

