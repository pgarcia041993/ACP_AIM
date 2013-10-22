
<div>
<form action="NewSession.php"> 
<datalist id="program_list">
<?php 
$getProg=mysql_query("Select * from acp_program ORDER BY ProgramName ASC");
while($row = mysql_fetch_array($getProg)):
echo "<option value='". $row['ProgramName'] . "'>";
?>
 <?php endwhile;?>

 </datalist>
 <p>Temporary </p>
<input list="program_list" id="facultyname" name="facultyname"  placeholder="Select Program" required />
<!--<input type="submit" name="submit" value="Continue...">-->

</form>
<a href="../NewSession.php"><button> Continue</button></a> 
<a href="../home.php"><button> Home</button></a> 
</div>