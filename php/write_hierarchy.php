<?php
$name = $_POST['node'];

 $file = './human.json';
 $existing = file_get_contents($file);
 $jsonAnswers = json_encode($name);
 $output = $existing . $jsonAnswers; 

 
 $ret = file_put_contents($file, $name);


/*$output = shell_exec($command);*/

echo($ret);
?>