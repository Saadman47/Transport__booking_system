<html>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center>
<?php

$conn = new mysqli("localhost", "root","", "adnan");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `bookinglist`";
$result = $conn->query($sql);
?>
<form action="removeqr.php" method = "Post">
<table><th><font size ="6">Booking ID</th><th></th><th><font size ="6">Schedule</th><th><font size ="6">Route</th><th><font size ="6">Price</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr> <td> <input type="checkbox" name="id[]" value="'. $row["Booking_ID"] .'" >  </td><td>' . $row["Booking_ID"]. "</td><td>" . $row["Schedule"]. "</td><td>" . $row["Route"]."</td><td>". $row["Price"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<button type ="submit">Submit</button>

<?php
echo "</form>";
$conn->close();
?>
</center>
</body>
</html>