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
                    Schedule of Events
                    <small><?php DisplayTitle();?> <script> document.write(new Date().getFullYear()); </script></small>
                </h1>
                <div class="col-lg-12">
                    <div class="scroll">
                        <select class="browser-default custom-select" id="sport" name="sport" >
                            <option disabled selected>--Choose Day--</option>
                            <?php Display_Schedule(); ?>
                        </select>     
                    </div>  <div>
                    <?php Display_Schedule_Image(); ?>   </div>
                </div>
            </div>
            <?php include"Home_Sidebar.php";?>
        </div>
        <hr>
  <script>
         $(function() {
        $('#sport').change(function(){
            $('.Options').hide();
            $('#' + $(this).val()).show();
        });
    });
    </script>
      
<?php include"Home_Footer.php";?>
