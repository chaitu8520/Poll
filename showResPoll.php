<?php
session_start();
include 'mysqlCon.php'; 
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  
  $pollId = $_GET['pollId'];
 }
 

?>
<form method ="post" action="/poll/submitPoll.php">
    <label for="pollId">Poll ID :</label> <?php echo $pollId;?><br><br>
	<input type ="hidden" name="pollId" value="<?php echo $pollId;?>"/>

  <label for="pQues">Poll Question  :</label> 
  <?php
     $sql="select distinct(pollQues) as pollQues from poll where pollId=".$pollId.";";
	// echo $sql;
	$res=$con->query($sql);
	$pollQues="";
	$f=true;
	while($row=$res->fetch_assoc()) {
	//echo $row['pollQues'];
	
     echo	$row['pollQues']."<br>";
	 
	}
	   $sql="select pollOption,cnt from poll where pollId=".$pollId.";";
	$res=$con->query($sql);
	
	while($row=$res->fetch_assoc()) {
	//echo $row['pollQues'];
	
     echo	$row['pollOption']." ---> ".$row['cnt']."<br>";
	 
	}
	
	 
		
	
	 
  

  ?>
 
 
</form>
