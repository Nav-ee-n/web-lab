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
$Rollno=$_POST['rollno'];
$Ktuid=$_POST['ktuid'];
$Gender=$_POST['gender'];
$Semester=$_POST['semester'];

$sq="insert into studreg values('$Name','$Rollno','$Ktuid','$Gender','$Semester')";
$p=mysqli_query($con,$sq);
if($p)
{
    echo "<script>alert('Successfully inserted one row');</script>";
}
else
{
    echo "<script>alert('Error');</script>";
}
?>