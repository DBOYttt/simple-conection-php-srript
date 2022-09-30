<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w3sql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT CustomerName FROM persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table>" . "<tr>" ."CustomerName: " . "<tr>" . $row["CustomerName"] . "<br>" . "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
