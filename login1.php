<?php
$con=mysqli_connect('localhost','root','','student');
/*
if($con)
{
    echo "connection successfull";
}
else
{
    echo "connection failed";
}
*/

$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phoneno'];
$Password=$_POST['pass'];
$RePassword=$_POST['repass'];


if($Password==$RePassword)
{
$sq="insert into table3 values('$Name','$Email','$Phone','$Password')";
$p=mysqli_query($con,$sq);
if($p)
{
    echo "<script>alert('Successfully');</script>";
}
else
{
    echo "<script>alert('Error');</script>";
}

echo "Welcome";

}
else
{
    echo "<script>alert('Password doesnt match');</script>";
}

?>