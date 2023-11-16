<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image" href="2.png">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="login.js"></script>
    <title>Nova Multispeciality Hospital-login</title>
</head>

<body onload="cap()">
    <div class="bg">

    </div>
    <div class="form">
        <h1>Login</h1>
        <form id="for" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="us">Username</label><br>
            <i class="fa fa-user" id="user"></i>
            <input type="text" name="username" id="us" placeholder="Username"><br>
            <label for="pass">Password</label><br>
            <i class="fa fa-lock" id="lock"></i>
            <input type="password" name="password" id="pass" placeholder="Password"><br>
            <label for="capcha">Enter capcha</label><br>
            <input type="text" readonly id="capt"><input type="text" id="capcha"><br>
            <input type="submit" name="log" id="submit" value="Login">
        </form>
        <p class="c1">Capcha is not visiabla<img src="refresh.png" onclick="cap()" width="40px"></p>
        <p class="p2"><a href="register.php" class="a3"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign in</a></p>
    </div>
    <?php
        $conn=mysqli_connect('localhost','root','','hospital');
        if(!$conn){
             echo "<br>";
            die("not Connected");
        }
        else{
             echo "<br>";
            echo("connected successfully");
        }
if(isset($_POST['log']))
    {
        echo"dkkdk0";
        $a=$_POST['username'];
        $b=$_POST['password'];
        $sql = "SELECT * FROM user WHERE username = '{$a}'"; //this password and uname from database
        $r = mysqli_query($conn, $sql);
    
          
                
                if($row = mysqli_fetch_assoc($r)) {
             echo "<br>";
             header("location:nova.html");
             echo "Valid, you are permitted";
                } else {
             echo "<br>";
    
                    echo "Invalid password";
                }
            
    
            // mysqli_close($conn);
        }
        ?>
</body>

</html>