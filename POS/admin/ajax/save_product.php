<?php
	if (empty($_POST['name']))
	{
		$errors[] = "Ingresa el nombre del producto.";
		echo json_encode(['error'=>true,'msg'=>'Ingresa el nombre del producto.']);
	}
	elseif (!empty($_POST['name']))
	{
		require_once ("../../conn.php");
		$name = mysqli_real_escape_string($conn,(strip_tags($_POST["name"],ENT_QUOTES)));
		$category = mysqli_real_escape_string($conn,(strip_tags($_POST["category"],ENT_QUOTES)));
		$price = floatval($_POST["price"]);
		$supplier = mysqli_real_escape_string($conn,(strip_tags($_POST["supplier"],ENT_QUOTES)));  
		$description = mysqli_real_escape_string($conn,(strip_tags($_POST["description"],ENT_QUOTES)));
		$tech = mysqli_real_escape_string($conn,(strip_tags($_POST["tech"],ENT_QUOTES)));
		$video = mysqli_real_escape_string($conn,(strip_tags($_POST["video"],ENT_QUOTES)));
		$stock = intval($_POST["stock"]);
		$fileInfo = PATHINFO($_FILES["images"]["name"]);
		$filePdf = $_FILES["pdf"]["name"];
		define('folderDirectory',$_SERVER['DOCUMENT_ROOT']."/FCH-master/POS/");

		if (empty($_FILES["images"]["name"]))
		{
			$locationImg="";
		}
		else
		{
			if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
				$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
				if(!file_exists(folderDirectory."upload")){
					mkdir(folderDirectory."upload" , 0777,true);
				}
				move_uploaded_file($_FILES["images"]["tmp_name"], folderDirectory."upload/" . $newFilename);
				$locationImg = "upload/" . $newFilename;
			}
			else
			{
				echo json_encode(['error'=>true,'msg'=>'Photo not added. Please upload JPG or PNG photo only!']);
				$locationImg = "";
			}
		}
		//echo json_encode(['error'=>false,'imagen'=>folderDirectory."upload/" . $newFilename,'pdf'=>folderDirectory.$destination.$filePdf]);
		// REGISTER data into database
		$locationPdf = "";

		$sql = "call addproduct('$category','$name','$price','$stock','$locationImg','$supplier','$description','$video','$tech','$locationPdf')";
		//mysqli_set_charset($conn,$sql);
		$query = mysqli_query($conn,$sql);
				
		if ($query) {
			
			if(empty($_FILES["pdf"]["name"]))
			{
				$locationPdf = "";
			}
			else
			{
				if(PATHINFO($filePdf)['extension'] !='pdf') // verificamos que sea pdf
				{	
					$errors[] = 'File not added. You must upload only file pdf';
					echo json_encode(['error'=>true,'msg'=>'File not added. You must upload only file pdf']);
				}
				else
				{
					$sqlIdPdf = "SELECT productid FROM product WHERE product_name = '$name'";
					$result = mysqli_query($conn,$sqlIdPdf);

					if($result)
					{	$result = mysqli_fetch_array($result);
						$result = $result['productid'];
						$destination = "admin/productsPdf/$result/";
						if(!file_exists(folderDirectory.$destination)){
							mkdir(folderDirectory.$destination , 0777,true);
						}
						move_uploaded_file($_FILES["pdf"]["tmp_name"],folderDirectory.$destination.$filePdf);
						$locationPdf = $destination.$filePdf;
						// consulta de editado
						$sqlUpPdf="UPDATE product set pdf_url = '$locationPdf' WHERE productid = $result";
						mysqli_query($conn,$sqlUpPdf);
						// echo json_encode(['error'=>true,'msg'=>'No se pudo ejectar la consulta, error:'.$result,'data:'=>$sqlUpPdf]);
					}					
					else
					{	$errors[] = "No se pudo ejectar la consulta, error: $result";
						echo json_encode(['error'=>true,'msg'=>'No se pudo ejectar la consulta, error:'.$result,'data:'=>$destination."--".$sqlIdPdf]);
					}
				}
			}

			echo json_encode(['error'=>false,'msg'=>'El producto ha sido guardado con éxito.']);
		} else {
			$errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
			echo json_encode(['error'=>true,'msg'=>'Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.'.$query]);
		}
	}	
	else 
	{
		echo json_encode(['error'=>true,'msg'=>'Unknow']);
	}

	// Este codigo se puede optimizar aun mas
?>

