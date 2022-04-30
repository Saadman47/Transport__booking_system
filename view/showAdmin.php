<html>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center>
<center>
<?php

$conn = new mysqli("localhost", "root","", "adnan");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `admin`";
$result = $conn->query($sql);
?>
<table><th><font size ="6">Name</th><th><font size ="6">Email</th><th><font size ="6">Number</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["Name"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Number"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</center>
</body>
</html>