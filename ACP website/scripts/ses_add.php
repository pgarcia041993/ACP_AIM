<?php 
include "dbcon.php";

/*
$_POST['fac_name'];
$_POST['fac_category'];
$_POST['in_ctype'];
$_POST['in_cname'];
$_POST['in_term'];
$_POST['in_topic'];
$_POST['in_units'];
$_POST['in_partici'];
$_POST['datepicker'];
$_POST['timepicker'];
$_POST['timepicker1'];
$_POST['in_atsaq'];
$_POST['in_atsrq'];
$_POST['in_materials'];
$_POST['in_remarks'];*/


mysql_query("INSERT INTO acp_session VALUES('','" . $_POST['fac_name'] . "','" . $_POST['fac_category'] . "',10,'" . $_POST['in_ctype'] . "','" . $_POST['in_cname'] . "','" . $_POST['in_term'] . "','" . $_POST['in_topic'] . "'," . $_POST['in_units'] . "," . $_POST['in_partici'] . ",'" . $_POST['datepicker'] . "','" . $_POST['timepicker'] . "','" . $_POST['timepicker1'] . "'," . $_POST['in_atsaq'] . "," .$_POST['in_atsrq'] . ",'" . $_POST['in_materials'] . "','" . $_POST['in_remarks'] . "','mar',CURDATE() , 'mar' , CURDATE())") or die (mysql_error());

include "dbclose.php";
echo '<script type="text/javascript">alert("New Program Session has been encoded. please check the list again")
window.location.href="../programGenerator.php"; </script>';
//header ("../programGenerator.php");
?>