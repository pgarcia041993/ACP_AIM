<?php
session_start();

include "scripts/dbcon.php";//include dataconnection
if(isset($_SESSION['acp_userID']) and isset ($_SESSION['acp_Name']) and isset($_SESSION['accessLvL']))
{//if still has session to the site transfer to the home page.
	header("Location: home.php");	
}
if (isset($_POST['submit'])) //if submited the login form
{
		//check the data from the database where data is correct and currently active
		//1 for currently active and 0 for seperated
$check= mysql_query("SELECT * FROM acp_users WHERE `username`='" . $_POST['username'] . "' AND `password` ='" . md5(trim($_POST['password'])) . "' and status=1") or die ("cannot connect to the database. Please Contact System Administrator Local 6154: look for MAR NEPOMUCENO" . mysql_error());
$num_rows = mysql_num_rows($check);
if($num_rows  >=1 )
{
	//if validated that user exist.. let's create a session
$results=mysql_fetch_array($check);
$_SESSION['acp_userID']=$results['userID'];
$_SESSION['acp_Name']=$results['name'];
$_SESSION['accessLvL']=$results['userLevel'];
mysql_query("INSERT INTO acp_LogsEntry VALUES('" . $results['name'] . "',NOW(),'" . $_SERVER['REMOTE_ADDR'] . "','login successfull')") or die ("cannot connect to the database. Please Contact System Administrator Local 6154: look for MAR NEPOMUCENO" . mysql_error());

header("Location: home.php");	


}
else
{
	$_SESSION['user_err']="Username or Password is incorrect";
	mysql_query("INSERT INTO acp_LogsEntry VALUES('" . $results['name'] . "',NOW(),'" . $_SERVER['REMOTE_ADDR'] . "','login failed')") or die ("cannot connect to the database. Please Contact System Administrator Local 6154: look for MAR NEPOMUCENO" . mysql_error());
	header ("Location: index.php");
}
}
else
{


?>
<!DOCTYPE html>
<head>
    <title>AIM ACADEMIC CREDIT POINTS</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
        <div class="container">
            <header>
                <h1>AIM <span>Academic Credit Points<span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                   
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="<?php echo $_SERVER['PHP_SELF']?>" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p><font color="#FF0000">
                                <?php if(isset($_SESSION['user_err']))
{
echo 	$_SESSION['user_err'];
unset($_SESSION['user_err']);	
}?>
                                </font> </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username: </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password: </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit" /> 
								</p>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
</body>
</html>
<?php }

?>