<!doctype html>
<html lang="en">
  <body>
    <h1>List of ALL my movies!!!</h1>
    <?php
      // Connect to database
      include("db.php");
	
      // Run SQL query
      $sql = "SELECT * FROM movies ORDER BY Date_of_release";
      $results = mysqli_query($mysqli, $sql);
    ?>
	
<form action="search-movies.php" method="post">
  <input type="text" name="keywords" placeholder="Search">
  <input type="submit" value="Go!">
</form>

    <table>
      <?php while($a_row = mysqli_fetch_assoc($results)):?>
        <tr>
          <td><a href="Movie-details.php?id=<?=$a_row['Movie_id']?>"><?=$a_row['Movie_name']?></a></td>
          <td><?=$a_row['Price']?></td>
         </tr>
      <?php endwhile;?>
    </table>
  </body>
</html>