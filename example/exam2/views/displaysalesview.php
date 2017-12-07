<!-- right column: content section -->

      <div class='col'>
        <div class='col-md-6 offset-md-2'>
         <h3>My Rental History</h3>
        </div>
         <?php
        if (isset($mydata)){
                echo "<table class='table'>";
                // display a list of customers
 			echo "<tr><thead>
                          <td >Movie Title</td>
                          <td >Check Out Date</td>
                          <td>Return Date</td>
                          </tr></thead>";

                for ($i=0; $i<count($mydata); $i++){
                // each element of $data is an associative array
                        $product_info = $mydata[$i];
                        echo "<tr>
                          <td >{$product_info['title']}</td>
                          <td >{$product_info['date_out']}</td>
                          <td >{$product_info['returned']}</td>
                          </tr>";
                }
                echo "</table>";
        } else
        echo "Order list is empty";
?>
  </div>

