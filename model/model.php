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