<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.prodpad.com/wp-content/themes/pp-v1/assets/css/styles.css?v=1.57">
<!--[if IE]><link rel="shortcut icon" href="https://www.prodpad.com/wp-content/themes/pp-v1/assets/images/favicon.ico"><![endif]-->
<link rel="icon" type="image/png" href="https://www.prodpad.com/wp-content/themes/pp-v1/assets/images/favicon-48.png">
<link rel="apple-touch-icon" href="https://www.prodpad.com/wp-content/themes/pp-v1/assets/images/favicon-apple.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700"/>
    
 
<link rel="canonical" href="https://www.prodpad.com/pricing/" />
 

<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='bcct_style-css'  href='https://www.prodpad.com/wp-content/plugins/better-click-to-tweet/assets/css/styles.css?ver=3.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.prodpad.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9' type='text/css' media='all' />
 
<link rel='https://api.w.org/' href='https://www.prodpad.com/wp-json/' />
<link rel="alternate" type="application/json+oembed" href="https://www.prodpad.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.prodpad.com%2Fpricing%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.prodpad.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.prodpad.com%2Fpricing%2F&#038;format=xml" />
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($cn,"SELECT * from `mst_user` where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='style8' align=center>Wel come to Online Exam</h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#CC3300"><span class="style6"></span></td>
    <td width="29%" bgcolor="#CC3333"><div align="center" class="style1">User Login </div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Wel come to Online Quiz</h1>
      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">Wel Come to Online 
            examination</span></p>
      </blockquote>
    </div></td>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><span class="style2">Login ID </span></td>
          <td><input name="loginid" type="text" id="loginid2"></td>
        </tr>
        <tr>
          <td><span class="style2">Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#CC3300"><div align="center"><span class="style4">New User ? <a href="signup.php">Signup Free</a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>
