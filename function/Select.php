<?php
function DisplayTitle(){
    global $connection;
    $sql = "SELECT * FROM tbl_website_title;";
    $result = mysqli_query($connection,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $title = $row['Web_Title'];
            echo $title;
        }      
    }   
}
function Show_Overall_Table(){
    global $connection;

    $sql = "SELECT Team_Name,Overall_Point FROM tbl_overall ORDER BY Overall_Point DESC ;";
    $result = mysqli_query($connection,$sql);
    $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
                $Team_Name = $row['Team_Name'];
                $over_points = $row['Overall_Point'];
                $rank = $row['Ranking'];
                echo "<tr>";
                echo "<td>$Team_Name</td>";
                if(empty($over_points)){
                    echo "<td>0</td>";
                }else{
                echo "<td>$over_points</td>";
                }  
                
                echo "<td><a href='Home_Overall_data.php?view={$Team_Name}'>View</a></td>";
                echo "</tr>";
                }
            }
}
function Display_Schedule(){
    global $connection;
    $sql = "SELECT * FROM tbl_schedule;";
    $result = mysqli_query($connection,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $sched_id = $row['Id'];
            $Schedule = $row['Schedule_Decs'];
                                echo "<option value='$sched_id' >$Schedule</option>";
        }
    } 
}
function Display_Schedule_Image(){
    global $connection;
    $sql = "SELECT * FROM tbl_schedule;";
    $result = mysqli_query($connection,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $sched_id = $row['Id'];
            $post_image = $row['Schedule_Image'];
                                
            echo " <div class='Options' id='{$sched_id}' 
            style='display:none;'><img class='img-responsive' src='http://cpanel.sportfest2020.dx.am//images/$post_image'></div>";
        }
    }
                  
}
function Display_Home_Data(){
    global $connection;
    global $event_id;
    $sql = "SELECT * FROM tbl_points WHERE Team_Name = '{$event_id}' ORDER BY Score DESC";  
    $result = mysqli_query($connection,$sql);
    $resultCheck = mysqli_num_rows($result);
                              
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
        $Team_Name = $row['Event_Name'];
        $points = $row['Score'];
        $position = $row['Position'];
        echo "<tr>";
        echo "<td>$Team_Name</td>";
                                    
            if(empty($points)){
                echo "<td>0</td>";
                  echo "<td>$position</td>";
            }else{
                echo "<td>$points</td>";
                echo "<td>$position</td>";
            }
                echo "</tr>";
        }  
     }
}


?>