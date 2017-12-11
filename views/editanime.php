
***REMOVED***
// ADD ANIME
if($_GET['mode'] == 'addanime'){

    //form
    echo '<form method="post" action="index.php?mode=insertanime">
        <!-- Title -->
        <div class="row">';

    if($_GET['mode'] == 'search'){
        echo '<div class="col"></div>';
    ***REMOVED*** else {
        echo '<div class="col" align="right"><font color="red" size="6"> * </font></div>';
    ***REMOVED***

    echo '<div class="form-group col-10">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="name" placeholder="Title of the anime (e.g. Naruto)">
            </div>
            <div class="col"></div>
        </div>
        <!-- Type -->
        <div class="row">
            <div class="col"></div>
            <div class="form-group col-10">
                <label for="type">Type</label>
                <select class="form-control" name="type">
                    <option value="-1">-</option>';

    // list all types pulled from the db
    if (isset($type_data)){
        for ($i=0; $i<count($type_data); $i++){
            $row = $type_data[$i];
            foreach ($row as $key=>$value){
                echo "<option value='{$value***REMOVED***'>{$value***REMOVED***</option>";
            ***REMOVED***
        ***REMOVED***
    ***REMOVED***

    echo '</select>
            </div>
            <div class="col"></div>
        </div>';

    // Genre
    echo '<div class="row">
            <div class="col"></div>
            <div class="form-group col-10">
                <label for="genre">Genre</label>
                <div id="genre-dropdown">';

        echo '<select class="form-control" name="genre" disabled>';

    echo '<option value="-1">-</option>';

    // list all genres pulled from the db
    if (isset($genre_data)){
        for ($i=0; $i<count($genre_data); $i++){
            $row = $genre_data[$i];
            foreach ($row as $key=>$value){
                echo "<option value='".($i+1)."'>{$value***REMOVED***</option>";
            ***REMOVED***
        ***REMOVED***
    ***REMOVED***

    echo '</select>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <!-- Submit -->
        <div class="row">
            <div class="col"></div>
            <div class="col-10">
                <input type="submit" class="btn btn-primary form-control" id="submit-btn" />
            </div>
            <div class="col"></div>
        </div>
    </form>';

***REMOVED***

// EDIT ANIME
if($_GET['mode'] == 'editanime'){
    
        //form
        echo "<form method='post' action='index.php?mode=updateanime&anime_id=";
        echo $_GET['anime_id'];
        echo "'>
            <!-- Title -->
            <div class='row'>";
    
        if($_GET['mode'] == 'search'){
            echo '<div class="col"></div>';
        ***REMOVED*** else {
            echo '<div class="col" align="right"><font color="red" size="6"> * </font></div>';
        ***REMOVED***
    
        echo '<div class="form-group col-10">
                    <label for="name-update">Title</label>
                    <input type="text" class="form-control" name="name-update" placeholder="Title of the anime (e.g. Naruto)">
                </div>
                <div class="col"></div>
            </div>
            <!-- Type -->
            <div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="type-update">Type</label>
                    <select class="form-control" name="type-update">
                        <option value="-1">-</option>';
    
        // list all types pulled from the db
        if (isset($type_data)){
            for ($i=0; $i<count($type_data); $i++){
                $row = $type_data[$i];
                foreach ($row as $key=>$value){
                    echo "<option value='{$value***REMOVED***'>{$value***REMOVED***</option>";
                ***REMOVED***
            ***REMOVED***
        ***REMOVED***
    
        echo '</select>
                </div>
                <div class="col"></div>
            </div>';
    
        // Episodes
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="episodes">Episodes</label>
                    <input type="text" class="form-control" name="episodes" placeholder="Number of episodes (e.g. 12)" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Score
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="score">Score</label>
                    <input type="text" class="form-control" name="score" placeholder="Rating out of 10" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Members
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="members">Members</label>
                    <input type="text" class="form-control" name="members" placeholder="Number of members (e.g. 10000)" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Studio
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="studio-name">Studio</label>
                    <input type="text" class="form-control" name="studio-name" placeholder="Name of the studio (e.g. Studio Pierrot)" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
            // Genre
        echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="genre">Genre</label>
                    <div id="genre-dropdown">';
    
        if($_GET['mode'] == 'editanime'){
            echo '<select class="form-control" name="genre" disabled>';
        ***REMOVED***else{
            echo '<select class="form-control" name="genre">';
        ***REMOVED***
    
        echo '<option value="-1">-</option>';
    
        // list all genres pulled from the db
        if (isset($genre_data)){
            for ($i=0; $i<count($genre_data); $i++){
                $row = $genre_data[$i];
                foreach ($row as $key=>$value){
                    echo "<option value='".($i+1)."'>{$value***REMOVED***</option>";
                ***REMOVED***
            ***REMOVED***
        ***REMOVED***
    
        echo '</select>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <!-- Submit -->
            <div class="row">
                <div class="col"></div>
                <div class="col-10">
                    <input type="submit" class="btn btn-primary form-control" id="submit-btn" />
                </div>
                <div class="col"></div>
            </div>
        </form>';
    
    ***REMOVED***

    // SEARCH
if($_GET['mode'] == 'search'){
    
        //form
        echo '<form method="post" action="index.php?mode=results">
            <!-- Title -->
            <div class="row">';
    
        if($_GET['mode'] == 'search'){
            echo '<div class="col"></div>';
        ***REMOVED*** else {
            echo '<div class="col" align="right"><font color="red" size="6"> * </font></div>';
        ***REMOVED***
    
        echo '<div class="form-group col-10">
                    <label for="name-search">Title</label>
                    <input type="text" class="form-control" name="name-search" placeholder="Title of the anime (e.g. Naruto)">
                </div>
                <div class="col"></div>
            </div>
            <!-- Type -->
            <div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="type">Type</label>
                    <select class="form-control" name="type">
                        <option value="-1">-</option>';
    
        // list all types pulled from the db
        if (isset($type_data)){
            for ($i=0; $i<count($type_data); $i++){
                $row = $type_data[$i];
                foreach ($row as $key=>$value){
                    echo "<option value='{$value***REMOVED***'>{$value***REMOVED***</option>";
                ***REMOVED***
            ***REMOVED***
        ***REMOVED***
    
        echo '</select>
                </div>
                <div class="col"></div>
            </div>';
    
        // Episodes
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="episodes">Episodes</label>
                    <input type="text" class="form-control" name="episodes" placeholder="Number of episodes (e.g. 12)">
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Score
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="score">Score</label>
                    <input type="text" class="form-control" name="score" placeholder="Rating out of 10" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Members
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="members">Members</label>
                    <input type="text" class="form-control" name="members" placeholder="Number of members (e.g. 10000)" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
        // Studio
        if($_GET['mode'] == 'editanime'){
            echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="studio-name">Studio</label>
                    <input type="text" class="form-control" name="studio-name" placeholder="Name of the studio (e.g. Studio Pierrot)" disabled>
                </div>
                <div class="col"></div>
            </div>';
        ***REMOVED***
    
            // Genre
        echo '<div class="row">
                <div class="col"></div>
                <div class="form-group col-10">
                    <label for="genre">Genre</label>
                    <div id="genre-dropdown">';
    
        if($_GET['mode'] == 'editanime'){
            echo '<select class="form-control" name="genre" disabled>';
        ***REMOVED***else{
            echo '<select class="form-control" name="genre">';
        ***REMOVED***
    
        echo '<option value="-1">-</option>';
    
        // list all genres pulled from the db
        if (isset($genre_data)){
            for ($i=0; $i<count($genre_data); $i++){
                $row = $genre_data[$i];
                foreach ($row as $key=>$value){
                    echo "<option value='".($i+1)."'>{$value***REMOVED***</option>";
                ***REMOVED***
            ***REMOVED***
        ***REMOVED***
    
        echo '</select>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <!-- Submit -->
            <div class="row">
                <div class="col"></div>
                <div class="col-10">
                    <input type="submit" class="btn btn-primary form-control" id="submit-btn" />
                </div>
                <div class="col"></div>
            </div>
        </form>';
    
    ***REMOVED***
***REMOVED***