Welcome <?php echo $_POST["name"]. " ".  $_POST["nazwisko"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = ($_POST['name']);
$lastname =($_POST['nazwisko']);
$email =($_POST['email']);


$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$name', '$lastname', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<br>" . "New record created successfully<br>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
