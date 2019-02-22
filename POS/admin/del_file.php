<?php
	include('session.php');
	$route = $_SERVER['DOCUMENT_ROOT']."/FCH-master/POS/";
	// $service = $_POST['id'];
	$id = $_POST['id'];
	$photo = $_POST['photo'];  
	$idProd = $_POST['idProd'];  
	$allPhotos = '';
	// $id=$_GET['service2'];
	mysqli_query($conn,"call deleteimg('$id')");

	
	if(unlink($route.$photo))
	{
		$sql = "select * from carousel as c where c.productid = $idProd"; 
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result)){
				$id = $row['id_photo'];
				$idProd = $row['productid'];
				$photo = $row['photo'];
				$allPhotos.= "<img class='m-3'src='../$photo' width='200' height='200' />
					<a onclick='deletePhoto($id,\"$photo\",$idProd)' class='btn btn-danger text-white'><i class='fa fa-trash'></i></a>";
			}

			echo json_encode(['error'=>false,'allPhotos'=>$allPhotos]); 
		}
		else
		{	
			echo json_encode(['error'=>true,'msg'=>'<h4>Not Photos yet!</h4>']);
		}    
		
	}	
	else
	{
		echo json_encode(['error'=>true,'msg'=>'Please, try again','route'=>$route.$photo]);
	} 
	                          
?>
	