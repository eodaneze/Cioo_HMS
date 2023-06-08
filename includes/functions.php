<?php 
function trimData($data){
 $data = htmlspecialchars($data);
 $data = trim($data);
 $data = stripcslashes($data);

 return $data;
}

?>