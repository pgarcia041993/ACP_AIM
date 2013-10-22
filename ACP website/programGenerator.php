<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ACP Program Generator</title>
	<link rel="stylesheet" media="screen" href="css/styles.css" >
</head>
<body>
<div class="main">
<form class="contact_form" action="scripts/prog_save.php" method="post" name="contact_form">
    <ul>
        <li>
		
             <h2>Program Generator
             <span class="required_notification">* Denotes Required Field</span>
			 
        </h2></li>
		<fieldset>
        <li>
            <label for="name">Program Name:</label>
            <input type="text"  placeholder="John Doe" name="in_progname" id="in_progname"required />
        </li>
        <li>
            <label for="email">Program Type:</label>
              <div class="styled-select"> <select name="in_progtype" id="in_progtype">
			  <option value="#">------Select Type------</option>
			  <option value="Degree">Degree</option>
			  <option value="Non-Degree">Non-Degree</option>
			  <option value="Faculty Development">Faculty Development</option>
			  <option value="Staff Development">Staff Development</option>
			  <option value="Research ">Research </option>
			  <option value="Forums/Conferences.">Forums/Conferences.</option>
		</select>
        </div>
           
        </li>
        <li>
            <label for="website">School/Center:</label>
            <input type="text" name="in_center" id="in_center" placeholder="......." required />
        </li>
        <li>
            <label for="website">Batch:</label>
            <input type="text" name="in_batch" id="in_batch" placeholder="......." required />
        </li>
       </fieldset>
        <li>
        	<button class="submit" type="submit">Generate Program</button>
        </li>
		
    </ul>
</form>
<a href="home.php"><button> Temporary Home Button</button></a> 
</div>
</body>
</html>