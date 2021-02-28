<?php

 $file = $_GET['file'] . ".pdf";

 header("content-disposition: attachement; filename=" . urlencode($file));
 
 $download = fopen($file, "r");

 while(!feof($download)){
     echo fread($download, 8192);
     flush();
 }

 fclose($download);

?>