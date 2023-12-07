<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <form action="studupdate.php" method="POST">
        <table border="0" cellspacing="10" cellpadding="10">
                <tr>
                    <td>Ktuid : </td>
                    <td><input type="text" name="ktuid"/></td>
                </tr>
                <tr>
                    <td>Series1 : </td>
                    <td><input type="text" name="series1"/></td>
                </tr>
                <tr>
                    <td>Series2 : </td>
                    <td><input type="text" name="series2"/></td>
                </tr>
                <tr>
                    <td><input type="submit" /></td>
                </tr>
            </table>
        </form>
    </body>
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
$n=$_POST['ktuid'];
$a=$_POST['series1'];
$b=$_POST['series2'];

$s="UPDATE mark1 SET Series1='$a', Series2='$b' WHERE Ktuid='$n'";
$q=mysqli_query($con,$s);

/*
if(mysqli_num_rows($q))
{
    echo "<table border='5' cellspacing='10' cellpadding='10'>
    <tr>
    <th>Series1</th>
    <th>Series2</th>
    </tr>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>".$row["Series1"]."</td>";
        echo "<td>".$row['Series2']."</td>";
        echo "</tr>;";

    }
    echo "</table>";
}
else{
    echo "Empty";
}
?>
</html>
*/


$x="SELECT * FROM 'studreg' JOIN mark1 ON studreg.'Ktuid'=mark1.'Ktuid' WHERE studreg.'Ktuid'='$n'";
$r=mysqli_query($con,$x);
if(mysqli_num_rows($r))
{
    while($row=mysqli_fetch_assoc($r))
    {
        if($row['Ktuid']==$n)
        {
            echo "<table border='1'><tr><td>Name</td><td>Rollno</td><td>Gender</td><td>Semester</td>
            <td>Series</td><td>Series2</td><td>Assignment1</td><td>Assignment2</td><td>Attendance</td>
            </tr><tr><td>".$row['Name']."</td><td>".$row['Rollno']."</td><td>".$row['Gender']."</td>
            <td>".$row['Semester']."</td><td>".row['Series1']."</td><td>".$row['Series2']."</td>
            <td>".$row['Assignment1']."</td><td>".$row['Assignment2']."</td><td>".$row['Attendance']."
            </td></tr>";
        }
        else
        echo "<script>alert('Update not successfull')</script>";

    }
    echo "</table>";
}
else echo "Not Found";
?>
</body>
</html>