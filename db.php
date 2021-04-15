<?php 
$db['db_host'] = "fdb24.awardspace.net";
$db['db_user'] = "3280979_manalo";
$db['db_pass'] = "markmark12";
$db['db_name'] = "3280979_manalo";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);





?>