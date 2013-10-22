<?php
session_start();
include "scripts/dbcon.php";//include dataconnection
if(!isset($_SESSION['acp_userID']) and !isset ($_SESSION['acp_Name']) and !isset($_SESSION['accessLvL']))
{//if still has session to the site transfer to the home page.
	header("Location: index2.php");	
}

if($_SESSION['accessLvL'] >=2)
{

$rowResults=mysql_query ("SELECT * FROM  `pa_view` ORDER BY acp_sesID DESC LIMIT 20") or die (mysql_error());
}
else
{
$rowResults=mysql_query ("Select * from acp_session where FacultyName='Angtuaco, Enrico' ORDER BY acp_sesID DESC") or die (mysql_error());	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<link rel="stylesheet" type="text/css" href="css/excel-2007.css"/>

<script lang="javascript">
window.onload=function(){
	document.getElementById("TheTable").className = "ExcelTable2007";

};
</script>
<style>
main
{
margin:auto;
width:70%;

}
</style>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>AIM ACADEMIC CREDIT POINTS</title>
</head>
<body>
<p><?php if(isset($_SESSION['notification']))
{
echo 	$_SESSION['notification'];
unset($_SESSION['notification']);	
}?></p>
<p>Welcome <?php echo $_SESSION['acp_Name'];?> !</p>

<br />
<div>
<a href="ProgramGenerator.php"><button> Create New Program</button></a> 
<a href="scripts/inc_ProgramList.php"><button> Create New ACP Session</button></a> 

<a href="logout.php"><button> Logout</button></a> 
<table id="TheTable"
border="1"
class=""
>
<tr><th class="heading">&nbsp;</th><th></th><th>Faculty Name</th><th>Program Name</th><th>Date</th><th>ACP Aquired</th> <th>Encoder</th></tr>
<tr>


<?php 
$a=1;
while($row = mysql_fetch_array($rowResults)):
 echo "<tr><td
align='left'
valign='bottom'
class='heading'
>" . $a . "</td>";
 echo "<td
align='left'
valign='bottom'
class='heading'
><a href='#?r=" .$row['acp_sesID'] ."'><img src='images/search-folder-icon.png' /></a></td>";
 echo    "<td
align='left'
valign='bottom'
class='heading'
>" . $row['FacultyName'] ."</td>";
  echo " <td
align='left'
valign='bottom'
class='heading'
> " . $row['ProgramName'] . "</td>";
  echo  "<td
align='left'
valign='bottom'
class='heading'
>" . $row['Date'] . "</td>";
  echo   "<td
align='left'
valign='bottom'
class='heading'
>" . $row['AcpAq'] . "</td>";
	echo  "<td
align='left'
valign='bottom'
class='heading'
>" . $row['CreatedBY'] . "</td>";

                echo  "</tr>";
				$a++;
				
				?>
                    <?php endwhile;?>
</table>



</body></html>
