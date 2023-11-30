<html>
<head>
<title>Factorial</title>
</head>
<body>
<form method="POST">
<label>Enter a number</label>
<input type="text" name="number"/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if($_POST['submit']=="Submit"){
$input=$_POST['number'];
$fact=1;
for($i=$input;$i>=1;$i--)
{
$fact=$fact*$i;
}
echo "The factorial of ".$input." is ".$fact;
}
?>
</body>
</html> 