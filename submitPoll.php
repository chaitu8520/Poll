<?php
include 'mysqlCon.php'; 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  
  $pollId = $_POST['pollId'];
   $pollOption = $_POST['pollOption'];
   if($pollOption=='') {
	echo "pls select one option";
return;
	
   }
 
  $sql="update poll set cnt=cnt+1 where pollId=".$pollId." And pollOption='".$pollOption."';";
 // echo $sql;
  $res=$con->query($sql);
  if($res)
	echo "<h3> Response has been submitted</h3> Do you want to see result : <a href='/poll/showResPoll.php?pollId=".$pollId."'>".$pollId."</a>";
   else echo "error";
 }
 


?>