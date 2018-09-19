<?php
//---  DB Connect Start ---
$servername = "localhost";
$username   = "root";
$password   = "0000";
$dbname     = "QUOTE_DB";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query  = "SELECT * FROM QUOTES ORDER BY RAND() LIMIT 1";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {
    echo $row["QUOTE"]. " <br><div style='text-align: right'>-" . $row["AUTHOR"]. "</div>";
}

?>
