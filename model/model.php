***REMOVED***
function deleteAnime($anime_id){
  global $db;
  // define SQL statement
  $sql = 'DELETE FROM `anime`
    WHERE anime_id=:anime_id';
	// define values for named parameters
  $values = array(':anime_id'=>$anime_id);
  $stm =$db->prepare($sql);
  $stm->execute($values);
  return true;
***REMOVED***

function insertNewAnime($name, $type){
  global $db;
  // define SQL statement
  $sql = 'INSERT INTO `anime` (name, type) VALUES
	  (:name, :type)';
	// define values for named parameters
  $values = array(':name'=>$name, ':type'=>$type);
  $stm =$db->prepare($sql);
  $stm->execute($values);
  return true;
***REMOVED***

function updateAnime($anime_id, $name, $type){
  global $db;
  // define SQL statement
  $sql = 'UPDATE `anime`
    SET name=:name, type=:type
    WHERE anime_id=:anime_id';
	// define values for named parameters
  $values = array(':anime_id'=>$anime_id, ':name'=>$name, ':type'=>$type);
  $stm =$db->prepare($sql);
  $stm->execute($values);
  return true;
***REMOVED***

function getAllRecords($sql, $data=NULL){
/* This function can be invoked using 1 or 2 arguments.
   The first argument must be an SQL statement. If there are named parameters in the SQL statement,
   then use the second argument to pass an associative array which defines values for named parameters.
*/
      global $db;
        // Prepare SQL statement
        $stm = $db->prepare($sql);
        // Execute SQL statement
        $stm->execute($data);
        // Fetch all the records
        $results = $stm->fetchAll(PDO::FETCH_ASSOC);
        // return values
        return $results;
***REMOVED***

function getOneRecord($sql, $data=NULL){
/* This function can be invoked using 1 or 2 arguments.
   The first argument must be an SQL statement. If there are named parameters in the SQL statement,
   then use the second argument to pass an associative array which defines values for named parameters.
*/
      global $db;
        // Prepare SQL statement
        $stm = $db->prepare($sql);
        // Execute SQL statement
        $stm->execute($data);
        // Fetch all the records
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        // return values
        return $result;
***REMOVED***