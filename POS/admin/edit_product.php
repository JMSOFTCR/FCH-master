<?php
	require_once ("../../conn.php");

	if (empty($_POST['edit_id'])){
		echo json_encode(['error'=>true,'msg'=>"The id field is empty! ",'field'=>$_POST['edit_id']]);
	} 
	elseif (!empty($_POST['edit_id']))
	{
		$pid = intval($_POST['edit_id']);
		
		if($_POST['query'] == '1')
		{
			$result=mysqli_query($conn,"select * from product left join category on category.categoryid=product.categoryid left join supplier on supplier.userid=product.supplierid where productid='$pid'");
			$row=mysqli_fetch_array($result);

			echo json_encode(['error'=>false, "edit_name"=>"$row[product_name]","category"=>category($conn,$row['categoryid'],$row['category_name']),
							  'supplier'=>supplier($conn,$row['supplierid'],$row['company_name']),'edit_price'=>$row['product_price'],'edit_stock'=>$row['product_qty'],
							  'edit_description'=>$row['description'],'edit_tech'=>$row['tech'],'edit_video'=>$row['video']]);
		}
		else 
		{
				
			$id=mysqli_real_escape_string($conn,(strip_tags($_POST["edit_id"],ENT_QUOTES)));      
			$name = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_name"],ENT_QUOTES)));
			$category = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_category"],ENT_QUOTES)));
			$supplier = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_supplier"],ENT_QUOTES)));
			$price = floatval($_POST["edit_price"]);
			$description = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_description"],ENT_QUOTES)));
			$tech = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_tech"],ENT_QUOTES)));
			$video = mysqli_real_escape_string($conn,(strip_tags($_POST["edit_video"],ENT_QUOTES)));
			$stock = intval($_POST["edit_stock"]);
			$fileInfo = PATHINFO($_FILES["image"]["name"]);
			define('folderDirectory',$_SERVER['DOCUMENT_ROOT']."/POS/admin/"); /// modificado
			$p=mysqli_query($conn,"select * from product where productid='$id'");
			$prow=mysqli_fetch_array($p); 
			
			if (empty($_FILES["image"]["name"]))
			{
				$locationImg=$prow['photo'];
			}
			else
			{
				if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png")
				{
					if(!file_exists(folderDirectory."upload"))
					{
						mkdir(folderDirectory."upload",0777,true);
					}
					$newFilename = $fileInfo['filename'] . "." . $fileInfo['extension'];
					move_uploaded_file($_FILES["image"]["tmp_name"], folderDirectory."upload/".$newFilename);
					$locationImg = "upload/" . $newFilename;
					unlink(folderDirectory."upload/".$prow["photo"]); // eliminamos la foto actual 
				}
				else
				{
					$locationImg=$prow['photo'];
				}
			}
			
			// UPDATE data into database
			$sql = "call update_product('$id','$category','$name', '$price','$stock','$locationImg','$supplier', '$description','$video', '$tech')";
			$query = mysqli_query($conn,$sql);
			
			// if product has been added successfully
			if($query) 
			{
				echo json_encode(['error'=>false,"msg"=>'Product successfully updated!','products'=>getAllProducts($conn,$category)]);
			} 
			else
			{
				echo json_encode(['error'=>true,'msg'=>'Try again. Product not deleted!',"mistake"=>mysqli_error($conn)]);
				echo mysqli_error($conn);
			}
		}
	} 
	else 
	{
		echo json_encode(['error'=>true,'msg'=>"Unknow"]);
	}


	function category($conn,$idCategory,$nameCategory){
		$options ="";
		try{
			$result=mysqli_query($conn,"select * from category where categoryid != $idCategory");
			if($result)
			{
				$options.= "<option value=". $idCategory.">".$nameCategory."</option>";
				while($crow=mysqli_fetch_array($result)){
					$options.= "<option value=". $crow['categoryid'].">".$crow['category_name']."</option>";
				}
			}
			else
			{
				return "<option >There are errors in category</option>";
			}
		}
		catch(mysqli_sql_exception $e){
			return "<option>".$e."</option>";
		}
		
		return $options;
	}

	function supplier($conn,$idSupplier,$nameCompany){
		$options = "";
		try{
			$result=mysqli_query($conn,"select * from supplier where userid != $idSupplier");
			if($result)
			{
				$options.= "<option value=". $idSupplier.">".$nameCompany."</option>";
				while($srow=mysqli_fetch_array($result)){
					$options.= "<option value=". $srow['userid'].">".$srow['company_name']."</option>";
				}
			}
			else
			{
				return "<option >There are errors in supplier</option>";
			}
			
		}catch(mysqli_sql_exception $e){
			return "<option>".$e."</option>";
		}
		return $options;
	}

	function getAllProducts($conn,$idCategory){
		$tableProd="";
		$sqlRead="select * from product where categoryid = $idCategory";
		
		$result=mysqli_query($conn,$sqlRead);
		if($result){
			while($row = mysqli_fetch_array($result)){
				$pid = $row['productid'];
				$tableProd .="<tr>
							  <td>". $row['product_name']. "</td>
							  <td>". $row['product_price']."</td>
							  <td>". $row['product_qty'].  "</td>";
				$tableProd .="<td><button onclick='getProductEdit($pid)' class='btn btn-success btn-sm' data-toggle='modal' data-target='#editprod'><i class='fa fa-edit'></i> Edit</button>
				<button onclick='getPhoto($pid)' class='btn btn-success btn-sm' data-toggle='modal' data-target='#addphoto'><i class='fa fa-edit'></i> Add Photo</button>
				<button onclick='getProductDelete($pid,$idCategory)' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i> Delete</button></td> 
				</tr>";
			}
		}
		return $tableProd;
	}

?>