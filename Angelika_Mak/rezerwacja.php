<?php
if (isset($_POST["data"])) && (isset($_POST["osoby"])) && (isset($_POST["telefon"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "baza_12";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $data= $_POST["data"]
    $osoby=$_POST["osoby"]
    $telefon=$_POST["telefon"]

    $sql = "INSERT INTO rezerwacje VALUES (NULL, 1, '$data', $osoby, '$telefon');";

    if (mysqli_query($conn, $sql)) {
        echo "<br>" . "New record created successfully<br>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>