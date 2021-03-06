<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Academic Credit Points</title>
        <link rel="stylesheet" media="screen" href="css/styles.css" >
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.ptTimeSelect.css" />
		<script type="text/javascript" src="js/jquery.ptTimeSelect.js"></script>
		
        <script>
          $(function() {
                $( "#datepicker" ).datepicker();
          });
        </script>
		
		<script>
        $(document).ready(function(){
            $( "#timepicker").ptTimeSelect();
        });
		</script>
	
		<script>
        $(document).ready(function(){
            $( "#timepicker1").ptTimeSelect();
        });
		</script>
</head>
<body>

 <datalist id="faculty_list">
  <option value="Angtuaco, Enrico">
  <option value="Bagadion, Benjamin">
  <option value="Bernardo, Francisco">
  <option value="Bolante, Maurino">
  <option value="Borromeo, Horacio">
  <option value="Canto, Buenaventura">
  <option value="Caparas, Ma. Veronica">
  <option value="Chua, Ronald">
  <option value="Confesor, Ma. Nieves">
  <option value="Cruz, Richard">
  <option value="De Guzman, Gloria">
  <option value="De Jesus, Edilberto">
  <option value="De Vera, Manuel">
  <option value="DeKrey, Steven">
  <option value="Domingo, Rene">
  <option value="Escobido, Matthew George">
  <option value="Francisco, Jamil Paolo">
  <option value="Gallegos, Jesus">
  <option value="Gavino, Jacinto">
  <option value="Go, David Gulliver">
  <option value="Herrera, Ma. Elena">
  <option value="Keitel, Robert">
  <option value="Kim, Song Kyoo">
  <option value="Lagrosa, Milagros">
  <option value="Leyco, Emmanuel">
  <option value="Licuanan, Victoria">
  <option value="Lim, Ricardo">
  <option value="Lim, Victor">
  <option value="Lontoc, Patricia">
  <option value="Lopez, Mario Antonio">
  <option value="Luz, Juan Miguel">
  <option value="Macaranas, Federico">
  <option value="Manalac, Maria Theresa">
  <option value="Mendoza, Ronald">
  <option value="Mendoza, Rufo">
  <option value="Ortigas, Gaston">
  <option value="Perez, Antonio Ma.">
  <option value="Roberto, Raymundo">
  <option value="Roman, Francisco">
  <option value="Roxas, Fernando">
  <option value="Salazar, Meliton">
  <option value="Stevens, Gillian Ann">
  <option value="Tan, Victor">
  <option value="Tiongson, Erwin">
  <option value="Ugut, Gracia">
  <option value="Yu, Veicheng">
  <option value="Basuil, Dyna Avegail">
  <option value="Coloma, Sonny">
  <option value="Guiza, Fredelita">
  <option value="Agana, Tomas Luke">
  <option value="Amerasinghe, Nihal">
  <option value="Arroyo, Ma. Antonia Odelia">
  <option value="Azurin, Paolo Antonio">
  <option value="Banzon, Eduardo">
  <option value="Barroco, Jose Manuel">
  <option value="Chua, Rogelio">
  <option value="Conroy, Micael">
  <option value="Cruzabra, Ma. Cecilia">
  <option value="De Asis, Karen">
  <option value="Dizon, Teodoro Ma.">
  <option value="Gavino, Cynthia">
  <option value="Gonzalez, Federico">
  <option value="Hernando, Soledad">
  <option value="Herrera, Henry Joseph">
  <option value="Lim, Donald Patrick">
  <option value="Ma, Henry">
  <option value="MacDonald, Stephen">
  <option value="Maity, Arup">
  <option value="Mongay, Jorge">
  <option value="Naranjilla, Sergio">
  <option value="Ortega, Joselito">
  <option value="Ortega, Victoria">
  <option value="Smith, Kenneth">
  <option value="Tan, George">
  <option value="Tantoco-Daniels, Catherine">
  <option value="Testa, Carmen">
  <option value="Hartijasti, Yanki">
  <option value="Amoroso, Donald">
  <option value="Doytch, Nadejda">
  <option value="Hartigan-Go, Kenneth">
  <option value="Omar Mahmoud, Toman">
  <option value="Portugal, Edwin">
  <option value="Rognes, Asa Malmstrom">
  <option value="Shankar, Savita">
  <option value="Torio, Philamer">
  <option value="Parshar">
  </datalist>
<form class="contact_form" action="process.php" method="post" name="contact_form">
    <div class="main">
    <ul>
        <li>
             <h2>ACP
             <span class="required_notification">* Denotes Required Field</span>
        </h2></li>
        <fieldset>
        <legend>Faculty</legend>
        
        <li>
            <label for="lbl_name">Faculty Name:</label>
            <input list="faculty_list" id="facultyname" name="facultyname"  placeholder="Rodolfo, Romulo" required />
        </li>
         <li>
            <label for="lbl_core">Faculty Category</label>
            <input type="text" name="facultycategory" id="facultycategory" placeholder="Core/Adjunc" required />
        </li>
        </fieldset>
         <fieldset>
        <legend>Program</legend>
         <li>
            <label for="lbl_progname">Program Name:</label>
            <input type="text" name="programname" id="programname" placeholder="Program" required />
        </li>
		 <li>
            <label for="drp_type">Program Type:</label>
        <div class="styled-select"> <select name="programtype"
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
            <label for="name">Batch:</label>
            <input type="text" name="batch" id="facultyname" placeholder="Cohort...." required />
        </li>
         <li>
            <label for="name">School/Center:</label>
            <div class="styled-select" name="in_center"> <select name="schoolcenter">
  <option value="#">------Select Type------</option>
 
</select></div>
        </li>
         <li>
            <label for="lbl_ctype">Course Type:</label>
            <input type="text" name="coursetype" placeholder="....." required />
        </li>
         <li>
            <label for="lbl_cname">Course Name:</label>
            <input type="text" name="coursename" placeholder="....." required />
        </li>
         <li>
            <label for="lbl_term">Module/Term Week:</label>
            <input type="text" name="module" placeholder="....." required />
        </li>
         <li>
            <label for="lbl_topic">Topic:</label>
            <input type="text" name="topic" placeholder="....." required />
        </li>
         <li>
            <label for="lbl_units">Units:</label>
            <input type="text" name="units" placeholder="....." required />
        </li>
         <li>
            <label for="lbl_participants">No. of Participants:</label>
            <input type="text" name="noofparticipants" placeholder="....." required />
        </li>
         <li>
            <label for="name">Date:</label>
            <input type="text" id="datepicker" name="date" name="in_date">
        </li>
         <li>
            <label for="name">Start Time:</label>
            <input type="text" id="timepicker" name="starttime" placeholder="....." required />
			<label for="name">End Time:</label>
            <input type="text" id="timepicker1" name="endtime" placeholder="....." required />
        </li>
        </fieldset>
         <fieldset>
        <legend>ATS</legend>
		<li>
            <label for="name">ATS Aquired:</label>
            <input type="text"  name="atsaquired" placeholder="....." required />
        </li>
         <li>
            <label for="name">ATS Required:</label>
            <input type="text" name="atsrequired" placeholder="....."  />
        </li>
        </fieldset>       
         <fieldset>
        <legend>Summary</legend>
         <li>
            <label for="name">Materials Used:</label>
            <input type="text" name="materilasused" placeholder="....." />
        </li>
         <li> 
            <label for="name">Remarks:</label>
            <input type="text" name="remarks" placeholder="....." />
        </li>
        </fieldset>
        <li>
             <button class="submit" type="submit" data-text="Checking Data..">Submit Form</button>
        </li>
    </ul>
    </div>
</form>
</body>
</html>