


<?php

include 'mysqlCon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  
  $pollId = $_POST['pollId'];
  $pQues=$_POST['pQues'];
  $pOptions=$_POST['options'];
   $cnt=0;
 
  $opt=explode(',',$pOptions);
  foreach($opt as $op) {
	  
  $sql="insert into poll(pollQues,pollId,pollOption,cnt) values(?,?,?,?)";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("ssss",$pQues, $pollId, $op,$cnt);
  $stmt->execute();
	  
  } 
  
  
  
$con->close();
 
}


?>

<html>

<h1>Poll Created : <a href="/poll/showPoll.php?pollId=<?php echo $pollId; ?>"><?php echo $pollId; ?></a></h1>

</html>
