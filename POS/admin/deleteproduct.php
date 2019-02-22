<?php
	
	include('session.php');

	$pid =intval(mysqli_real_escape_string($conn,$_POST['idProd']));
	$idCategory =intval(mysqli_real_escape_string($conn,$_POST['idCat']));
	$tableProd = "";
	$sql = "call deleteProduct($pid)";
	$sqlRead="select * from product as p where p.categoryid = $idCategory";

	$result = mysqli_query($conn,$sql);
	
	if(mysqli_affected_rows($conn)>0){

		$result=mysqli_query($conn,$sqlRead);

		while($row = mysqli_fetch_array($result)){
			$pid = $row['productid'];
			$tableProd .="<tr>
						  <td>". $row['product_name']. "</td>
            			  <td>". $row['product_price']."</td>
            			  <td>". $row['product_qty'].  "</td>";
            $tableProd .="<td><button class='btn btn-success btn-sm' data-toggle='modal' data-target='#editprod_$pid'><i class='fa fa-edit'></i> Edit</button>
            <button onclick='getPhoto($pid)' class='btn btn-success btn-sm' data-toggle='modal' data-target='#addphoto'><i class='fa fa-edit'></i> Add Photo</button>
            <button onclick='getProductDelete($pid,$idCategory)' class='btn btn-danger btn-sm' data-toggle='modal' ><i class='fa fa-trash'></i> Delete</button></td> 
			</tr>";
		}
		
		echo json_encode(['error'=>false,'msg'=>'Pruduct was deleted successfully','products'=>$tableProd]);
	}
	else{
		echo json_encode(['error'=>true,'msg'=>'Product not deleted!']);
	}
?>
