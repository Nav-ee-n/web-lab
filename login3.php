login.php

<html>
    <head><title>Login</title></head>
    <body>
        <center>
            <br><div><h3>Login</h3></div><br>
            <form method="post" action="">
                Username: <input type="text" name="username" placeholder="Enter your Email"><br><br>
                Password: <input type="password" name="password"><br><br>
                <input type="submit" value="Login">
                <input type="reset" value="Reset"><br><br>
                not a member? <a href="sign_in.php">Sign up</a>
            </form>
        </center>
        <?php
            $conn=mysqli_connect('localhost', 'root', '', 'school');
            if(!$conn) {
                echo "connection not successfull";
            }
            if($_POST){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sq = "SELECT * FROM student WHERE email_id ='$username' AND password='$password'";
                $result = mysqli_query($conn, $sq);
                $number_of_rows= mysqli_num_rows($result);
                if($number_of_rows==1){
                    echo "<script>alert('login Successfull!!')</script>";
                    header('Location: home.php');
                }
                else{
                    echo "<script>alert('Invalid credentials')</script>";
                }
            }
        ?>
    </body>
</html>