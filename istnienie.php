<?php 
$filename= '/path/to/foo.txt';
if(file_exists($filename)){
    echo "this file $filename exists";
} else{
    echo "this file $filename does not exist";
}
?>