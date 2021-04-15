 <?php  
 $connection = mysqli_connect("fdb24.awardspace.net", "3280979_manalo", "markmark12", "3280979_manalo");  
 $output = '';  
 if(isset($_POST["Event_Name"]))  
 {  
      if($_POST["Event_Name"] != ''){  
           $sql = "SELECT * FROM tbl_points WHERE Event_Name = '".$_POST["Event_Name"]."' ORDER BY Score DESC";  
      }  
      else {  
           $sql = "SELECT * FROM tbl_points";  
      }  
      
      $result = mysqli_query($connection, $sql);   
      $resultCheck = mysqli_num_rows($result);
    
         if($resultCheck > 0){
                $output .= '  <div class="col-lg-12"><table  class="table table-bordered table-hover">
            <thead>
                <th>Team</th>
                <th>Points</th>
                <th>Position</th>
            </thead>
            <tbody>';
            
              while($row = mysqli_fetch_array($result)){ 
                  $output .= '<tr><td>'.$row["Team_Name"].'</td><td>'.$row["Score"].'</td><td>'.$row["Position"].'</td></tr>';   
              }    $output .= '</tbody>
             </table></div>';
              echo $output;  
         }else{
              echo "<div class='container'><h1>Event has not been score yet.</h1></div>";
         }  
 }
 ?>  