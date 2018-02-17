
<?php
session_start();
require("../database.php");
 
error_reporting(1);
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

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Subject Add </h3>";

echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysqli_query("SELECT * from `mst_subject` where sub_name='$subname'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysqli_query($cn,"INSERT into `mst_subject`(sub_name) values ('$subname')")  ;
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
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
 
<title>Add Subject</title>
<section class="subscription-plans" id="subscriptionPlans">
  <div class="container">
    <div class="wrapper-container with-margin with-equal-height mobile-margin">
       
        <div class="padded-content">

<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" placeholder="Enter Subject Name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" class="btn btn--primary"></td>
    </tr> 
  </table>
</form>
 
      </div>
        </div>
  </div>
</section>
<p>&nbsp; </p><br><br><br><br><br><br><br>
</div>
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