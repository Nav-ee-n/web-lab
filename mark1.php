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

$Ktuid=$_POST['ktuid'];
$Series1=$_POST['series1'];
$Series2=$_POST['series2'];
$Assignment1=$_POST['assignment1'];
$Assignment2=$_POST['assignment2'];
$Attendance=$_POST['attendance'];

$sq="insert into mark1 values('$Ktuid','$Series1','$Series2','$Assignment1','$Assignment2','$Attendance')";
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