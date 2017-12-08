 <div class='row align-items-center'>
        <div class='col-8'>
            <a href='index.php'><img src='http://www.southjersey.com//images/page_movies.jpg' alt='moviestore' height='100'></a>
        </div>
        <div class='col-4'>
          <h2>Movie Store</h2>
        </div>
  </div>
  <div class='row'>
   <div class='col'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
       aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php?mode=memberlist">Member List</a>
       </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Genre: </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php
        for ($i=0; $i<count($movie_types); $i++){
          // each element is an associative array that defines a particular movie type
          $movie_type = $movie_types[$i]['type'];
          echo "<a class='dropdown-item'
                href='index.php?mode=movietype&genre={$movie_type}'>{$movie_type}</a>";
        } // end for
   ?>
</div>
</li>
 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Most popular movies: </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="nav-link" href="index.php?mode=p6&type=Movies checked out before 12/15/09">Movies checked out before 12/15/09</a>
        <a class="nav-link" href="index.php?mode=p7&type=Sci-Fi movies checked out after 12/14/09">Sci-Fi movies checked out after 12/14/09</a>
        <a class="nav-link" href="index.php?mode=p8&type=Drama movies released between 1990 and 2000">Drama movies released between 1990 and 2000 </a>
        <a class="nav-link" href="index.php?mode=p9&type=Favorite movies?" >Favorite movies </a>
        <a class="nav-link" href="index.php?mode=p10&type=Favorite Drama/Adventure movies">Favorite Drama/Adventure movies</a>
        <a class="nav-link" href="index.php?mode=p11&type=Sci-Fi movies checked out by most valuable customer">Sci-Fi movies checked out by most valuable customer</a>
        <a class="nav-link" href="index.php?mode=p12&type=Popular Drama movies">Popular Drama movies</a>
        <a class="nav-link" href="index.php?mode=p13&type=Popular Drama/Sci-Fi movies">Popular Drama/Sci-Fi movies </a>
       </li>
     </ul>
   </div>
  </nav>
 </div>
</div>

        
