<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysqli_query($cn,"SELECT mst_test.test_name,mst_test.total_que,mst_result.test_date,mst_result.score from `mst_test`,`mst_result` where mst_test.test_id=mst_result.test_id and mst_result.login='$login'") or die(mysqli_error($cn));

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";
?>
</body>
</html>
