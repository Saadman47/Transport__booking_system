
<html>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);  background-size:100% 100%;">
<center>
<?php
$mysqli = new mysqli("localhost","root","", "adnan");
$qr="INSERT INTO `bookinglist`(`Booking_ID`, `Schedule`, `Route`, `Price`) VALUES ('$_POST[bid]','$_POST[sch]','$_POST[rt]','$_POST[pr]')";
if($mysqli->query($qr)){
?>
<font size= "8">Booking has been Added</font></center>
<?php
}
?>

</html>