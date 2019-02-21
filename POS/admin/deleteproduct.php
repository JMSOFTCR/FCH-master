<?php
	sleep(2);
	include('session.php');
	$pid=$_POST['id'];

	$a=mysqli_query($conn,"select * from product where productid='$pid'");
	$b=mysqli_fetch_array($a);

	$rr = mysqli_query($conn,"delete from product where productid='$pid'");
	return $rr;
?>
