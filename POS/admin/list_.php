<?php
	include('session.php');

	$pq = mysqli_query($conn,"call listaproduct()");
  $data["data"] = mysqli_fetch_all($pq,MYSQLI_ASSOC);
	echo json_encode( $data );
?>
