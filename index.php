<?php include"Home_Header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h1 class="page-header">
                    Results
                    <small><?php DisplayTitle();?> <script> document.write(new Date().getFullYear()); </script></small>
                </h1> 
                The Partial and Unofficial  Score - Deduction and Special/Additional Points are not yet included
                <br/><table class="table table-bordered table-hover">
                    <thead>
                        <th>Team</th>
                        <th style="width:25%">Points</th>
                        <th style="width:25%"></th>

                    </thead>
                    <?php Show_Overall_Table();?>
                    <tbody>
                    </tbody>
                </table>
            </div>
           
            <?php include"Home_Sidebar.php";?>
        </div>
        <hr>

      
<?php include"Home_Footer.php";?>
