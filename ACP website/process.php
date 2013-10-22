<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>
<body>
<?php

$facultyname = $_POST['facultyname'];
$facultycategory = $_POST['facultycategory'];
$programname = $_POST['programname'];
$programtype = $_POST['programtype'];
$batch = $_POST['batch'];
$schoolcenter = $_POST['schoolcenter'];
$coursetype = $_POST['coursetype'];
$coursename = $_POST['coursename'];
$termweek = $_POST['module'];
$topic = $_POST['topic'];
$units = $_POST['units'];
$noofparticipants = $_POST['noofparticipants'];
$date = $_POST['date'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];
$atsaquired = $_POST['atsaquired'];
$atsrequired = $_POST['atsrequired'];
$materialsused = $_POST['materilasused'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO tblform (FacultyName, FacultyCategory, ProgramName, ProgramType, Batch, SchoolCenter, CourseType, CourseName, TermWeek, Topic, Units, NoofParticipants, Date, StartTime, EndTime, ATSAquired, ATSRequired, MaterialsUsed, Remarks) VALUES ('" . $facultyname . "','" . $facultycategory . "','" . $programname . "','" . $programtype . "','" . $batch . "','" . $schoolcenter . "','" . $coursetype . "','" . $coursename . "','" . $termweek . "','" . $termweek . "','" . $units . "','" . $noofparticipants . "','" . $date . "','" . $starttime . "','" . $endtime . "','" . $atsaquired . "','" . $atsrequired . "','" . $materialsused . "','" . $remarks . "')";

$con=mysqli_connect("localhost","root","","ACP_AIM");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$query = "INSERT INTO tblform (FacultyName, FacultyCategory, ProgramName, ProgramType, Batch, SchoolCenter, CourseType, CourseName, TermWeek, Topic, Units, NoofParticipants, Date, StartTime, EndTime, ATSAquired, ATSRequired, MaterialsUsed, Remarks) VALUES 
('" . $facultyname . "','" . $facultycategory . "','" . $programname . "','" . $programtype . "','" . $batch . "','" . $schoolcenter . "','" . $coursetype . "','" . $coursename . "','" . $termweek . "','" . $termweek . "','" . $units . "','" . $noofparticipants . "','" . $date . "','" . $starttime . "','" . $endtime . "','" . $atsaquired . "','" . $atsrequired . "','" . $materialsused . "','" . $remarks . "')";

$result = mysqli_query($con,$query);

if (!$result)
  {
  die('Error: ' . mysqli_error($con));
  }
  
mysqli_close($con);

?>
</body>

</html>
