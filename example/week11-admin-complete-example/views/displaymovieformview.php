<div class='row'>
  <div class='col'>
    <h2>Update Movie Information</h2>
 
   <h4>Movie: ***REMOVED*** echo $table_data['title']; ***REMOVED***:</h4>
  <form method='post' action='index.php?mode=confirmmoviedata&movieid=***REMOVED*** echo $table_data['movie_id']; ***REMOVED***' >
   <table class='table'>
    <tr><td>Title:</td>
	<td><input type='text' name='title' 
		value='***REMOVED*** echo $table_data['title']; ***REMOVED***' /></td></tr>
    <tr><td>Genre: </td><td><input type='text' name='genre'
		value='***REMOVED*** echo $table_data['type']; ***REMOVED***' /></td></tr>
    <tr><td>Year: </td><td><input type='text' name='year' 
		value='***REMOVED*** echo $table_data['year'];***REMOVED***' /></td></tr>
    </table>
   <p><button type='submit' class='btn btn-primary' >Update Movie Information
      </button></p>

  </form>
