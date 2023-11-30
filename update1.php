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
    echo "<html><body><form>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "Rollno:<input type='text' value='".$row["rollno"]."'disabled name='rollno1'>";
        echo "Name:<input type='text' value='".$row["Name"]."'disabled name='name1'>";
        echo "Mark:<input type='text' value='".$row["marl"]."'name='mark1'>";
    }
    echo "<input type='submit' name='button1' value='update'";
    echo "</html></body></form>";
}
else{
    echo "Empty";
}
?>
</html>