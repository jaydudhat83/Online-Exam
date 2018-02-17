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
if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
echo "<BR><h3 class=head1>Add Question </h3>";
if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);
mysqli_query($cn,"INSERT into `mst_question`(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')") or die(mysql_error());
echo "<p align=center>Question Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
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
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<form name="form1" method="post" onSubmit="return check();">
  <table width="80%"  border="1" align="center">
    <tr>
      <td width="24%" height="32"><div align="left"><strong>Select Test Name </strong></div></td>
      <td width="1%" height="5">  
      <td width="75%" height="32"><select name="testid" id="testid">
<?php
$rs=mysqli_query($cn,"SELECT * from `mst_test` order by test_name");
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[0]'>$row[2]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea name="addque" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input name="ans4" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" class="btn btn--primary"></td>
    </tr>
  </table>
</form>
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