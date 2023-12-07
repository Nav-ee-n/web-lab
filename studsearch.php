<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <form action="studsearch.php" method="POST">
        <table border="0" cellspacing="10" cellpadding="10">
                <tr>
                    <td>Ktuid : </td>
                    <td><input type="text" name="ktuid"/></td>
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

$s="select * from mark1 where Ktuid='$n'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
    echo "<table border='5' cellspacing='10' cellpadding='10'>
    <tr>
    <th>Ktuid</th>
    <th>Series1</th>
    <th>Series2</th>
    </tr>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>".$row["Ktuid"]."</td>";
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