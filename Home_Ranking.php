  <?php 
 function fill_brand()  
 {  
     global $connection;
      $output = '';   
      $sql = "SELECT * FROM tbl_event";  
      $result = mysqli_query($connection, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["Event_Name"].'">'.$row["Event_Name"].'</option>';  
      }  
      return $output; 
 }
function fill_product()  
 {  
    global $connection;
      $output = '';  
      $sql = "SELECT * FROM tbl_points";  
      $result = mysqli_query($connection, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
       
      }  
      return $output;  
 }  



?>

        
<?php include"Home_Header.php";?>
<style>
    img{
        width: auto;
        height: auto;
    } 
    select {
        width: 95%;
        margin: 10px;
        font-size:18pt;
 
    }
    select:focus {
        min-width: 95%;
        width: auto;
    }    
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h1 class="page-header">
                    Ranking
                    <small><?php DisplayTitle();?> <script> document.write(new Date().getFullYear()); </script></small>
                </h1> 
             
                <select class="browser-default custom-select" id="event" name="event">
                    <option disabled selected>Choose Event</option>  
                     <?php echo fill_brand(); ?>  
                </select>
                
              <div  id="show_ranking">
         
                            <?php echo fill_product();?>
                       
              
        
                
                </div>
                    
            </div>

            <?php include"Home_Sidebar.php";?>
        </div>

        <hr>

  <script>  
 $(document).ready(function(){  
      $('#event').change(function(){  
           var Event_Name = $(this).val();  
           $.ajax({  
                url:"ranking_data.php",  
                method:"POST",  
                data:{Event_Name:Event_Name},  
                success:function(data){  
                     $('#show_ranking').html(data);  
                }  
           });  
      });  
 });  
 </script>
<?php include"Home_Footer.php";?>