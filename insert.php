<?php
    include 'connect.php';
    
    $TeamA="";
    $TeamB="";
    $ScoreTeamA="";
    $ScoreTeamB="";
    $Category="";
    $Date="";

    $ID= -1;
    $type=0;
   


    if(isset($_GET['type']))
        $type = $_GET['type'];

    if($type == 1){
        if(isset($_GET['TeamA']))
            $TeamA=$_GET['TeamA'];

        if(isset($_GET['TeamB']))
            $TeamB=$_GET['TeamB'];

        if(isset($_GET['ScoreTeamA']))
            $ScoreTeamA=$_GET['ScoreTeamA'];

        if(isset($_GET['ScoreTeamB']))
            $ScoreTeamB=$_GET['ScoreTeamB'];

        if(isset($_GET['Category']))
            $Category=$_GET['Category'];

        if(isset($_GET['Date']))
            $Date=$_GET['Date'];

        if( $TeamA !== "" || $TeamB !== "" || $ScoreTeamA !== "" || $ScoreTeamB !== "" || $Category !== "" || $Date !== ""){
            $sql="INSERT INTO games(TeamA, TeamB, ScoreTeamA, ScoreTeamB, Category, Date) VALUES('$TeamA','$TeamB','$ScoreTeamA','$ScoreTeamB','$Category','$Date')";
            $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysqli_error());
        };

   };
    if($type == 2){
        if(isset($_GET['ID'])){
                $ID = $_GET['ID'];
                $sql = "DELETE FROM games WHERE ID = $ID";
                $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysqli_error());
        };
        
    };
    $categoryToOpen=0;
   

   if(isset($_GET['categoryToOpen']))
   $categoryToOpen=$_GET['categoryToOpen'];


    $sql = $categoryToOpen == 0 ? "SELECT * FROM games" : "SELECT * FROM games WHERE Category = '$categoryToOpen' ";
    $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysqli_error());
    $gamesARR = [];
    $singleGame="";
    $counter=1;

    while($row = mysqli_fetch_assoc($result)){   
        array_push($gamesARR,$row);
        $singleGame .='
            <tr>
                <th scope="row">'.$counter++.'</th>
                <td> '.$row['TeamA'] .'</td>
                <td> '.$row['TeamB'] .'</td>
                <td> '.$row['ScoreTeamA'].' </td>
                <td> '.$row['ScoreTeamB'].' </td>
                <td> '.$row['Category'] .'</td>
                <td> '.$row['Date'] .'</td>
                <td><a href="./insert.php?ID='.$row['ID'].'&type=2"><button class="btn btn-primary">Delete</button></a></td>
                <td><button type="button" class="btn btn-primary" onclick="editGame('.$row['ID'].')">Edit</button></td>
            </tr>         
        ';
     }

    
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
            <div class="row p-2">
                <form action="">
                    <div class="mb-3">
                        <label for="categoryToOpen" class="form-label">Category</label>
                        <input type="number" min="0" max="2" name="categoryToOpen" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>     
            <div class="row">
                <div class="col-2">
                    <form action="">
                        <div class="mb-3">
                            <input type="hidden" name="type" value="1"  class="form-control">
                            <label for="TeamA" class="form-label">TeamA</label>
                            <input type="text" name="TeamA" class="form-control">
                            <label for="TeamB" class="form-label">TeamB</label>
                            <input type="text" name="TeamB" class="form-control">
                            <label for="ScoreTeamA" class="form-label">ScoreTeamA</label>
                            <input type="number" name="ScoreTeamA" class="form-control">
                            <label for="ScoreTeamB" class="form-label">ScoreTeamB</label>
                            <input type="number" name="ScoreTeamB" class="form-control">
                            <label for="Category" class="form-label">Category</label>
                            <input type="number" name="Category" class="form-control">
                            <label for="Date" class="form-label">Date</label>
                            <input type="date" name="Date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Game</button>
                    </form>
                </div>
                <div class="col-10">
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
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo  $singleGame ?>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <script>
        function editGame(id){
            var games = <?php echo json_encode($gamesARR); ?>;
            console.log("id" , id ,games);

            const found =games.find(item => Number(item.ID)===id);
            console.log("found game: " , found);
           
        }
    </script>
  </body>
</html>

