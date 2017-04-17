<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<img src="1.jpg" id="pic1">
<img src="2.jpg" id="pic2">

<?php 

$usersName = $_POST['username']; 
$password = $_POST['pass']; 

?>
<div class="back">
<?php
if ($usersName == 'Firuz' && $password == 'ewing') {
?>
	<h1 id="h11" align="center"> Firuz Juraev </h1>
    <img src="4.jpg" id="fir">
    <p id="pp">Driver: Firuz Juraev Izatullayevich 
    <br>Date of birth: 06/05/1997
    </p>


</div>
<?php 
}
echo $usersName; 
 ?>


</body>
</html>