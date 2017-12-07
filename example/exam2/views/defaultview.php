<!-- right column: content section -->

      <div class='row justify-content-center login-box'>
	<div id='page-content'></div>
 <?php 
	if (!isset($_SESSION['user'])){
?>
		<div class='col-md-8'><h3>Welcome to Members Section</h3>
	 <h4>Please sign in</h4>
	</div>
	<div class='col-md-8'>
	<form action='index.php?mode=checkLogin' method='post'>
	<table class='table'>
	  <tr>
		<td class='text-right'>Username: </td>
	<td><input type='text' name='username' placeholder='Enter username' class='form-control'/></td>
	  </tr>
	  <tr>
		<td class='text-right'>Password:</td>
		<td><input type='password' placeholder='Enter password' name='pwd' class='form-control'/></td>
	   </tr>
	</table>
     </div>
	<div class='col-md-8'><button type='submit' class='btn btn-primary' >Sign in </button>
	   <button type='reset' class='btn' >Clear</button>
	</div>

	</form> 
</div>
<?php
} else {
?>
  <div class='row'><div class='col-md-11'>
  <img src='http://washington.uww.edu/data/cs382/moviestore/VIII-678304.jpg' alt='store'  width='1000'/>
  </div></div>
<?php
}// end if else
