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

$rno=$_POST['rno'];
$name=$_POST['name'];
$mark=$_POST['mark'];

$sq="insert into stud values('$rno','$name','$mark')";
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