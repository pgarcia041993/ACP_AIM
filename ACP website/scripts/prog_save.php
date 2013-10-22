<?php
include "dbcon.php";
/*if(!isset($_POST['submit']))
{
	
echo "haha2";	
	
}
else
{
	
echo "haha";	
}
*/
mysql_query("Insert into acp_program Values(NULL,'" . $_POST['in_progname'] . "',' " . $_POST['in_progtype'] . "','" .  $_POST['in_center'] . "','" . $_POST['in_batch'] . "','mar',CURDATE() , 'mar' , CURDATE())") or die (mysql_error())
;

include "dbclose.php";
$_SESSION['notification']="Program successfully Added";
echo '<script type="text/javascript">alert("New Program has been created. please check the list again") windows.location("home.php"); </script>';

?>