
<html>
<head> 
<link rel="stylesheet" type="text/css" href= "https://bootswatch.com/4/flatly/bootstrap.css">




</head>

<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost", "root","", "adnan");
$ids = implode($_POST ['id']);

 

$Q="Select Price from `bookinglist` where Booking_ID in (".$ids.")";

 


$result = $conn->query($Q);
?>
<font size = "6"> Price </font><br><br>
Your Selected Booking Details Below: <br><br>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td>Booking Id: ". $ids ."</td><br><br><td>Price: ". $row['Price']."</td>";
    }
} else {
    echo "0 results";
}
?>
 
<br><br>
<form action="Pay.php" method = "Post">
Confirm Booking<br><br>
<a class="btn btn-outline-success" href ="Enter Name.php">Enter Name:</a><input type="text" name = "n"></input><br><br>
<a class="btn btn-outline-success" href ="Enter Number.php">Enter number:</a><input type="text" name = "num"></input><br><br>
<a class="btn btn-outline-success" href ="Enter Booking Id.php">Enter Booking Id:</a><input type="text" name = "id"></input><br><br>
<button type ="Submit"> Pay </button>
</form>



<script src = "https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"> </script>

</body>
</center>
</html>