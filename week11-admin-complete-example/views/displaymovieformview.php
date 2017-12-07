<div class='row'>
  <div class='col'>
    <h2>Update Movie Information</h2>
 
   <h4>Movie: <?php echo $table_data['title']; ?>:</h4>
  <form method='post' action='index.php?mode=confirmmoviedata&movieid=<?php echo $table_data['movie_id']; ?>' >
   <table class='table'>
    <tr><td>Title:</td>
	<td><input type='text' name='title' 
		value='<?php echo $table_data['title']; ?>' /></td></tr>
    <tr><td>Genre: </td><td><input type='text' name='genre'
		value='<?php echo $table_data['type']; ?>' /></td></tr>
    <tr><td>Year: </td><td><input type='text' name='year' 
		value='<?php echo $table_data['year'];?>' /></td></tr>
    </table>
   <p><button type='submit' class='btn btn-primary' >Update Movie Information
      </button></p>

  </form>
