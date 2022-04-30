<html>

<head> 
<link rel="stylesheet" type="text/css" href= "https://bootswatch.com/4/flatly/bootstrap.css">




</head>

<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<?php
$mysqli = new mysqli("localhost","root","", "adnan");
$result = $mysqli->query("SELECT * FROM `admin` WHERE Name='$_POST[uname]'and Email ='$_POST[umail]' and Number = '$_POST[unumber]'");
if($result->num_rows == 0) {
?>
<center><font size= "10">You are a Visitor</font><br><br><br><br>

<font size= "6">View As:</font><br><br><br>

<a class = "btn btn-success"  href = "userpage.php">USER</a><br><br>

<script src = "https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"> </script>

</centre>
</body>

<?php
} else {
?>
<body style="background-color:skyblue">
<center><font size= "10">You are an Admin</font><br><br><br><br>

<font size= "6">View As:</font><br><br><br>

<a class = "btn btn-success" href = "userpage.php">USER</a><br><br>
<a class = "btn btn-success" href = "adminpage.php">ADMIN</a><br><br>

<script src = "https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"> </script>

</centre>
</body>

<?php
}
$mysqli->close();
?>
</html>