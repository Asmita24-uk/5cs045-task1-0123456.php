<?php
  // Connect to database and run SQL query
  include("db.php");

  // Grabs id value from URL
  $id = $_GET['id'];

  $sql = "SELECT * FROM movies WHERE Movie_id = {$id}";
  $rst = mysqli_query($mysqli, $sql);
  $a_row = mysqli_fetch_assoc($rst);
?>

<h1><?=$a_row['Movie_name']?></h1>
<p><?=$a_row['Genre']?></p>

<a href="list-movies.php"><< Back to list</a>
