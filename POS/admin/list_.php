<?php
	include('session.php');

	$pq = mysqli_query($conn,"select * from product left join category on category.categoryid=product.categoryid left join supplier on supplier.userid=product.supplierid");
  $data["data"] = mysqli_fetch_all($pq,MYSQLI_ASSOC);
	echo json_encode( $data );
?>
