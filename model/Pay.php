<html>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center>
<font size = "6">Your payment has been received. </font><br><br><br>

<?php

$conn = new mysqli("localhost", "root","", "adnan");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$s1 = "INSERT INTO `bookedlist`(`Name`, `Number`, `Booking_ID`) VALUES ('$_POST[n]','$_POST[num]','$_POST[id]')";
$sql4 =  "Select * from `Summary` ";
if ($conn->query($s1)) {

echo "Data Added to Booked List \n ";
echo "<br><br>";
}
$result = $conn->query($sql4);
if ($result->num_rows > 0) {


$sql =  "Update `Summary` SET  Total_earning = Total_earning + 500  ";
if ($conn->query($sql)) {

echo "Total earning updated \n ";
echo "<br><br>";
}

$sql1 =  "Update `Summary` SET  No_of_tickets_sold = No_of_tickets_sold + 1 ";
if ($conn->query($sql1)) {

echo "No. of tickets sold updated \n ";
echo "<br><br>";
}

$sql2 =  "Update `Summary` SET  Total_cost  = Total_cost+300 ";

 if ($conn->query($sql2)) {

echo " Total cost updated\n";
echo "<br><br>";
}
$sql3 =  "Update `Summary` SET  Profit  = Profit + 200" ;

 if ($conn->query($sql3)) {

echo "Total profit updated \n ";
echo "<br><br><br>";
}
}
else {

$sql5 =  "Insert Into `Summary` values ( 500, 1, 300, 200 ) ";
if ($conn->query($sql5)) {

echo "total earning updated \n ";
echo "<br><br><br>";
 

echo "No. of tickets sold updated \n";
echo "<br><br><br>";

echo "Total_cost updated \n ";

}
}

?>

</body>
</center>
</html>