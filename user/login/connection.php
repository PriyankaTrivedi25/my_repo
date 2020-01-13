 <?php
$servername = "remotemysql.com";
$username = "Bo70XJ0PIc";
$password = "TIfifm42dV";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$conn->select_db("Bo70XJ0PIc");
?> 
