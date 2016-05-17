<?php

 $file =$_GET['file'];
 $ret = file_get_contents($file);


echo($ret);
?>