h1>Search results</h1>
<?php

  // Connect to database and run SQL query
  include("db.php");

  // Read value from form
  $keywords = $_POST['keywords'];  

  // Run SQL query
  $sql = "SELECT * FROM movies 
          WHERE Movie_name LIKE '%{$keywords}%' 
          ORDER BY Date_of_release";
          
  $results = mysqli_query($mysqli, $sql);
?>

<table>
  <?php while($a_row = mysqli_fetch_assoc($results)):?>
    <tr>
      <td><a href="Movie-details.php?id=<?=$a_row['Movie_id']?>"><?=$a_row['Movie_name']?></a></td>
      <td><?=$a_row['Price']?></td>
    </tr>
  <?php endwhile;?>
</table>