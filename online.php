<html>
<head>
    <link rel="shortcut icon" type="image" href="2.png">
    <title>Online Appoinment</title>
    <link rel="stylesheet" href="online.css">
    <script src="online.js"></script>
</head>
<body>
    
    <div class="container">
        <div class="title">online appointment</div>
        <div class="content">
            <form id='registration' method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <label for="username">full name</label>
                        <input name="fname" placeholder="Nova Bond" id="username" type="text">
                    </div>
                    <div class="input-box">
                        <label>Age</label>
                        <input name="age" placeholder="50" type="text">
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
                        <label>state</label>
                        <input name="state" placeholder="Tamil Nadu" type="text">
                    </div>
                    <div class="input-box">
                        <label for="special">Specialist</label>
                        <input name="Specialist" placeholder="dermatologist" id="special" type="text">
                    </div>
                    <div class="input-box">
                        <label for="date">Date</label>
                        <input name="date" placeholder="12/11/2022" id="date" type="date">
                    </div>
                    <div class="input-box">
                        <label for="Time">Time</label>
                        <input  placeholder="12/11/2022" id="Time" type="time">
                    </div>
                    <div class="input-box">
                        <label>Session timing</label>
                        <input  placeholder="30 min" type="text" id="time">
                        <p>[if the session is long<br>break will be 15 minutes]</p>
                    </div>
                 
                  
                    <div class="input-box">
                        <label>City</label>
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
                    <label>Sex:</label>
                    <tr>
                        <input name="s" type="radio" id="male" value="male"><label for="male">Male</label>&emsp;
                        <input name="s" type="radio" id="Female" value="female"><label for="Female">Female</label>
                    </tr>
                </div>
                <input type="submit" value="submit" name="book">
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
    $gender=$_POST['s'];
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
     'online')";

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