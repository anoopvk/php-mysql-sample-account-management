<?php
include 'config.php';

$uname_in = $_POST["username"];
$pass_in = $_POST["password"];

$sql="SELECT * FROM `userdata` WHERE `username`= '$uname_in'";

$result = $conn->query($sql);
if($result) {
    if(mysqli_num_rows($result)>0){
        echo "username exists";
        $row=mysqli_fetch_array($result);
        $pass_db=$row['password'];
        // echo "<br>correct pass is ".$pass_db;
        if($pass_in==$pass_db){
            echo "<br>correct password";
        }
        else{
            echo "<br>incorrect password";
        }   
    }
    else{
        echo "username does not exist";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>