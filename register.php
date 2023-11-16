<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image" href="2.png">
    <link rel="stylesheet" href="register.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="login.js"></script>
    <title>Nova Multispeciality Hospital-Register</title>
</head>

<body>
    <div class="bg">

    </div>
    <div class="form">
        <h1>Register form</h1>
        <form id='registration' method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="userid">User id:</label>
                    <td><input type="text" name="userid" id="userid" size="20">
                </tr>
                <tr>
                    <td><label for="username">username:</label>
                    <td><input type="text" name="username" id="username" size="20">
                </tr>
                <tr>
                    <td><label for="passid">Password:</label>
                    <td><input type="password" name="pwd" id="passid" size="20">
                </tr>
                <tr>
                    <td><label for="cpassid">conform Password:</label>
                    <td><input type="password" id="cpassid" size="20">
                </tr>

                <tr>
                    <td><label for="address">parmant Address:</label>
                </tr>
                <tr>
                    <td><label for="">Address line 1:</label></td>
                    <td><input type="text" id="paddress1" size="30" name="paddress1"></td>
                </tr>
                <tr>
                    <td><label for="">Address line 2:</label></td>
                    <td><input type="text" id="paddress2" size="30" name="paddress2"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="button" value="same for temporary"
                            onclick="copy(this.form)"></td>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Temporary Address:</label>
                </tr>
                <tr>
                    <td><label for="">Address line 1:</label></td>
                    <td><input type="text" id="taddres1" size="30" name="taddress1"></td>
                </tr>
                <tr>
                    <td><label for="">Address line 2:</label></td>
                    <td><input type="text" id="taddres2" size="30" name="taddress2"></td>
                </tr>
                <tr>
                    <td><label for="country">Country:</label>
                    <td><select id="country">
                            <option selected="" value="Default">(Please select a country)</option>
                            <option value="AF">Australia</option>
                            <option value="AL">Canada</option>
                            <option value="DZ">India</option>
                            <option value="AS">Russia</option>
                            <option value="AD">USA</option>
                        </select></td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label>
                    <td><input type="text" name="mails" id="email" size="30">
                </tr>
                <tr>
                    <td><label id="gender">Gender:</label>
                    <td><input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label><br>
                        <input type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
                    </td>
                </tr>

                <tr>
                    <td align=right><input type="submit" name="sign" id="submit" value="Submit"
                            onclick="formValidation()"></td>
                    <td><input type="reset" onclick="res()"></td>

                </tr>
            </table>
        </form>


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
if(isset($_POST['sign']))
{
    echo "Form submitted!";
    $a=$_POST['username'];
    $b=$_POST['pwd'];
    $c=$_POST['mails'];
    $d=$_POST['paddress1'].$_POST['paddress2'];
    $sql="insert into user values('".$a."','".$b."','{$c}','{$d}')";
 
if(mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
    ?>
</body>

</html>