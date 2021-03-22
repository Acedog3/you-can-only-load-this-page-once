<?php

    $ips_file_path = 'ips.csv';

    $my_ip = $_SERVER['REMOTE_ADDR'];

    $ips = file_get_contents($ips_file_path);

    if(strstr($ips, $my_ip)){
        echo '<h1>Blocked.</h1>'; //what the user is shown once they have already loaded the page
    }else{
        echo '<h1>This is your first time visiting.</h1>'; //what the user is shown on the first time loading. kind of self explanatory
    }

?>




<?php

$v_ip = $_SERVER['REMOTE_ADDR'];
$v_date = date("l d F H:i:s"); //i dont think you even need this line lol

$fp = fopen("ips.csv", "a");
$ips = file_get_contents($ips_file_path);

    if(strstr($ips, $my_ip)){ //if ip is already in ips.csv it does nothing
        echo ''; 
    }else{
fputs($fp, "$v_ip\n"); //if ip is not in ips.csv it logs
fclose($fp);
    }

?>
