<?php 
$myfile =fopen(location.txt", "w");
$txt = "lat: " . $GET["Lat"] . "\nlong: " . &GET["long"] ;
fwrite($myfile, $txt);
fclose($myfile);
?>
