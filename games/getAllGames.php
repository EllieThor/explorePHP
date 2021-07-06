<?php
    include 'connect.php';
 

    $category=0;

   if(isset($_GET['category']))
   $category=$_GET['category'];

    $sql = $category == 0 ? "SELECT * FROM games" : "SELECT * FROM games WHERE Category = '$category' ";
    $result = mysqli_query($conn,$sql) or die ("Error in query: $sql. ".mysqli_error());
    $games = [];

    while($row = mysqli_fetch_assoc($result))
    {   array_push($games,$row); }

    echo json_encode($games);
?>

<!-- chrome.exe --user-data-dir="C://Chrome dev session" --disable-web-security -->