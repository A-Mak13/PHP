<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "goetel";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fav_language=$_POST['fav_language'];
/*
$sql = "ALTER TABLE MyGuests ADD fav_language varchar(255)";
if (mysqli_query($conn, $sql)) {
    echo "<br>" . "New record created successfully<br>";   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
$sql = "INSERT INTO MyGuests (firstname, lastname, fav_language) VALUES ('$firstname', '$lastname', '$fav_language')";
if (mysqli_query($conn, $sql)) {
    echo "<br>" . "New record created successfully<br>";   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
