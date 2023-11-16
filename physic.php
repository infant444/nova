<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image" href="2.png">
    <title>Physical Appoinment</title>
    <link rel="stylesheet" href="physic.css">
    <script src="physic.js"></script>
</head>

<body>

    <div class="container">
        <div class="title">physical appointment</div>
        <div class="content">
            <form id='registration' method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="user-details">
                    <div class="input-box">
                        <label for="username">full name</label>
                        <input name="fname" placeholder="Nova Bond" id="username" type="text">
                    </div>
                    <div class="input-box">
                        <label for="age">Age</label>
                        <input name="age" placeholder="50" type="text" id="age">
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input name="email" placeholder="novabond@gmial.com" id="email" type="email">
                    </div>
                    <div class="input-box">
                        <label for="phone">Phone Number</label>
                        <input name="number" placeholder="1234567890" id="phone" type="text">
                    </div>
                    <div class="input-box">
                        <label for="s">state</label>
                        <input name="state" placeholder="Tamil Nadu" type="text" id="s">
                    </div>
                    <div class="input-box">
                        <label for="date">Date</label>
                        <input name="date" placeholder="12/11/2022" type="date" id="date" >
                    </div>
                    <div class="input-box">
                        <label for="special">Specialist</label>
                        <input name="Specialist" placeholder="dermatologist" id="special" type="text">
                    </div>

                    <div class="input-box">
                        <label for="">City</label>
                        <select name="city">
                            <option value="1">Chennai</option>
                            <option value="2">Dehli</option>
                            <option value="3">Mumbai</option>
                            <option value="4">Kolkata</option>
                            <option value="5">Varanasi</option>
                            <option value="6">Bangalore</option>
                            <option value="7">Patna</option>
                            <option value="8">Mysore</option>
                            <option value="9">Trivandram</option>
                            <option value="10">Kochi</option>
                            <option value="11">Coimbatore</option>
                            <option value="12">vellore</option>
                            <option value="13">Amaravathi</option>
                            <option value="14">vizag</option>
                            <option value="15">Ahmedabad</option>
                        </select>
                    </div>

                </div>
                <div class="gender-details">
                    <label for="">Gender:</label>

                    <input type="radio" name="gender-details" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender-details" id="female" value="female">
                    <label for="female">Female</label>

                </div>
                <input type="submit" name="book" value="submit">
            </form>
        </div>
    </div>
    <?php
$conn = mysqli_connect('localhost', 'root', '', 'hospital');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully<br>";
}

if (isset($_POST['book'])) {
    echo"hello";
    $a = $_POST['fname'];
    $b = $_POST['age'];
    $c = $_POST['number'];
    $d = $_POST['Specialist'];
    $date=$_POST['date'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $gender=$_POST['gender-details'];
    $email=$_POST['email'];
    echo $date;
     $sql="insert into application values('".$a."',
     ".$b.",
     '{$email}',
     '".$c."',
     '{$state}',
     '{$date}',
     '".$d."',
     '{$city}',
     '{$gender}',
     'phycial')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
        header("location:sucess.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
</body>

</html>