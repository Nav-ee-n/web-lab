<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <form action="search.php" method="POST">
            Name:<input type="text" name="name"><br>
            
            <input type="submit">
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
$n=$_POST['name'];

$s="select * from stud where Name='$n'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
    echo "<table border='5' cellspacing='10' cellpadding='10'>
    <tr>
    <th>rollno</th>
    <th>Name</th>
    <th>Mark</th>
    </tr>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>".$row["rollno"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row['marl']."</td>";
        echo "</tr>;";

    }
    echo "</table>";
}
else{
    echo "Empty";
}
?>
</html>