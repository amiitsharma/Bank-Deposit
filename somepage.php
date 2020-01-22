<html>
<head>
</head>
<body >
<?php
  $x=$_POST['f1'];
  $y=$_POST['f2'];
  $con=mysqli_connect('localhost','root');
  mysqli_query($con,"use db1");
  $q="insert into customer(Name,Password) values ('$x','$y')";
  $a=mysqli_query($con,$q);
  if($a==1)
  {
	  
	?>
<p>User created successfully!!!</p>

<?php
  }
  else
  {
?>
<p>Some Problem Ocuurred</p>
<?php
  }
  mysqli_close($con);
?>
<a href="depositform.html">Head to deposit money</a>
</body>
</html>