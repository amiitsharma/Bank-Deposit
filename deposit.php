<html>
<head>
</head>
<body >
<?php
  $x=$_POST['f1'];
  $y=$_POST['f2'];
  $z=$_POST['f3'];
  $con=mysqli_connect('localhost','root');
  mysqli_query($con,"use db1");
  $q="insert into customer (Name,Password) values ('$x','$y')";
  $a=mysqli_query($con,$q);
  if($a==0)
  {
	$v=mysqli_query($con,"update customer set Amount=Amount+$z where Name='$x' and Password='$y'");
  if($v==1)
  {	  
?>
<p>Amount deposited successfully!!!</p>

<?php
  }
  else
  {
?>
<p>Some Problem Ocuurred</p>
<?php
  }
  }
  else
  {
?>
<p>Some Problem Ocuurred</p>
<?php
  }
  mysqli_close($con);
?>
</body>
</html>