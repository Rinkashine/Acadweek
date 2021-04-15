        
<?php include"Home_Header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h1 class="page-header">
                    <?php    
                    if(isset($_GET['view'])){
                        global $event_id;
                        $event_id = $_GET['view'];
                    echo $event_id;
                    }?>
                     <small><?php DisplayTitle();?> <script> document.write(new Date().getFullYear()); </script></small>
                </h1> 
                <?php 
                    global $event_id;
                    $sql = "SELECT * FROM tbl_points WHERE Team_Name = '{$event_id}' ORDER BY Score DESC";  
                    $result = mysqli_query($connection,$sql);
                    $resultCheck = mysqli_num_rows($result);
                         if($resultCheck > 0){

                        ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Event</th>
                        <th>Point</th>
                        <th>Position</th>
                    </thead>
                    <tbody>
                    <?php Display_Home_Data(); ?> 
                    </tbody>
                </table>    
                  <?php 
                         }else{
                             echo"<h1>$event_id Team has no data yet</h1>";
                       } 
                    ?>
                        
                
                <button class="btn btn-primary" onclick="pageRedirect()">Go Back</button>
            </div>
            <script type="text/javascript">
                function pageRedirect() {
                    window.location.replace("http://sportfest2020.dx.am/index.php");
                }      
            </script>
            <?php include"Home_Sidebar.php";?>
        </div>

        <hr>
<?php include"Home_Footer.php";?>