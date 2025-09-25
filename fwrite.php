<?php
    $myfile = fopen("newfile.txt","w")
    or die("Unable to open the file!");
$txt = "John Doe\n"
fwrite($myfile, $txt);
fclose($myfile);
?>
