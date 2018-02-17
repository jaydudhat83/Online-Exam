<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative Area Online Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
</head>

<body class="page-template page-template-pricing page-template-pricing-php page page-id-4647">
<?php
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysqli_query($cn,"SELECT * from `mst_admin` where loginid='$loginid' and pass='$pass'")  ;
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

 
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

<div id="main-content">
<!-- HERO -->
<div class="hero">
	<div class="container">
		 
							<h1><span style="font-weight: 400;">Admin Panel For Examination</span></h1>
  
	</div>
</div><!-- /HERO -->


<section class="subscription-plans" id="subscriptionPlans">
	<div class="container">
		<div class="wrapper-container with-margin with-equal-height mobile-margin">
			<div class="wrapper-33 border-radius--large border--grey subscription-plan subscription-plan--standard content--center">
				<div class="padded-content">
					<h2>Add Subject</h2>
					 

					<div class="button-wrapper">
						<a href="subadd.php" class="btn btn--primary btn--block">Click here</a>
					</div>

				</div>
			</div>
			<div class="wrapper-33 border-radius--large border--grey subscription-plan subscription-plan--unlimited content--center">
				<div class="padded-content">
					<h2>Add Test</h2>
					 

					<div class="button-wrapper">
						<a href="testadd.php" class="btn btn--primary btn--block">Click here</a>

						 
					</div>
				</div>
			</div>
			<div class="wrapper-33 border-radius--large border--grey subscription-plan subscription-plan--unlimited content--center">
				<div class="padded-content">
					<h2>Add Questions</h2>
					 

					<div class="button-wrapper">
						<a href="questionadd.php" class="btn btn--primary btn--block">Click here</a>

						 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 
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
</div>
</div>
</body>
</html>
