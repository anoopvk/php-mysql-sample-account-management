<?php
include 'config.php';

$uname = $_POST["username"];
$pass = $_POST["password"];

// $query="SELECT * FROM `dept` WHERE 1";
$sql = "INSERT INTO `userdata`( `username`, `password`) VALUES ('$uname','$pass')";

// $result=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>