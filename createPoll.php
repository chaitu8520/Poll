<?php



?>

<html>

<h2>Create your custom poll</h2>

<form method ="post" action="/poll/insertPoll.php">
    <label for="pollId">Enter Poll ID :</label>
	<input type="text" id="pollId" name="pollId"><br><br>

  <label for="pQues">Enter Poll Question  :</label>
  <textarea rows=4 cols=50 id="pQues" name="pQues"></textarea><br><br>
  <label for="options">Enter options with (,)comma seperated</label>
  <textarea rows=4 cols=40 id="options" name="options"></textarea><br><br>
  <input type="submit" value="Submit">
</form>


</html>