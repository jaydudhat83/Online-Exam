<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="profile" href="http://gmpg.org/xfn/11">


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
<?php
require("../database.php");

 


echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysqli_query($cn,"INSERT into `mst_test`(sub_id,test_name,total_que) values ('$subid','$testname','$totque')" );
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<header>  
    <div class="container">
         

        <label id="menuToggle" class="menu-toggle">Menu</label>
        
        <nav id="mainNav" class="main-menu vert-align">
            <div class="wrapper-100 vert-align vert-align--space">
              
                <div class="menu-header-menu-container">
  <ul id="menu-header-menu" class="menu"> 
<li id="menu-item-4664" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4664"><a href=""> </a>
</li>
</ul>
</div>
                <div class="btn-wrapper">
                    <a href="login.php" class="btn btn--outline">Admin Home</a>
                    <a href="signout.php" class="btn btn--primary">Logout</a>
                </div>
            </div>
        </nav>
    </div>
    <nav id="secondaryNav" class="secondary-nav" ></nav>
</header>
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select name="subid">
<?php
$rs=mysqli_query($cn,"SELECT * from `mst_subject` order by  sub_name");
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" class="btn btn--primary"></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p><br><br><br><br><br><br><br>
<footer>
  <div class="wave-container">
    <div class="wave wave--green"></div>
    <div class="wave wave--blue"></div>
  </div>

 
  <div class="secondary-footer">
    <div class="container">
     
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="padded-content until-desktop">
      
      <div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-4674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4674"><a href="https://www.prodpad.com/terms-of-service/">Copyright</a></li>
 
</ul></div>
      <p>Made with <img src="https://www.prodpad.com/wp-content/themes/pp-v1/assets/images/icons/made-with-love.svg" alt="love"/> by JAY AND ANIMESH</p>
      </div>
    </div>
  </div>
</div>
</footer>