<?php
	include('session.php');
	
	$name=$_POST['name'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$supplier=$_POST['supplier'];
	$description=$_POST['description'];
	$tech=$_POST['tech'];
	$video=$_POST['video'];
	$qty=$_POST['qty'];
	
	$fileInfo = PATHINFO($_FILES["image"]["name"]);
	
	if (empty($_FILES["image"]["name"])){
		$location="";
	}
	else{
		if ($fileInfo['extension'] == "jpg" OR $fileInfo['extension'] == "png") {
			$newFilename = $fileInfo['filename'] . "_" . time() . "." . $fileInfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $newFilename);
			$location = "upload/" . $newFilename;
		}
		else{
			$location="";
			?>
				<script>
					window.alert('Photo not added. Please upload JPG or PNG photo only!');
				</script>
			<?php
		}
	}
	
	mysqli_query($conn,"insert into product (product_name,categoryid,product_price,product_qty, supplierid, description, tech, video) values ('$name','$category','$price','$qty', '$supplier', '$description', '$tech','$video')");
	$pid=mysqli_insert_id($conn);
	mysqli_query($conn "call PaCarousel('$location')");
	mysqli_query($conn,"insert into inventory (userid, action, productid, quantity, inventory_date) values ('".$_SESSION['id']."', 'Add Product', '$pid', '$qty', NOW())");
	
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>

if($_FILES["archivo"]["error"]>0){
		echo "Error al cargar archivo";	
		} else {
		
		$permitidos = array("image/gif","image/png","image/jpg","application/pdf");
		$limite_kb = 2000;
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){
			
			$ruta = 'files/'.$id.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
                 mysqli_query($conn,"call GuardarImagen('$id','$target_path')"); 
				
                if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
                    
                
				}
				
				} else {
				echo "Archivo ya existe";
			}
			
			} else {
			echo "Archivo no permitido o excede el tamaño";
		}
		
	};   
                                                                                                       
                                                                                                       
        <div class="col-sm-10">
						<input type="file" class="form-control" id="archivo" name="archivo">
						
						<?php 
							$path = "../upload/".$pid;
							if(file_exists($path)){
								$directorio = opendir($path);
								while ($archivo = readdir($directorio))
								{
									if (!is_dir($archivo)){
										echo "<div data='".$path."/".$archivo."'><a href='".$path."/".$archivo."' title='Ver Archivo Adjunto'><span class='glyphicon glyphicon-picture'></span></a>";
										echo "$archivo <a href='#' class='delete' title='Ver Archivo Adjunto' ><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></div>";
										echo "<img src='files/$pid/$archivo' width='300' />";
									}
								}
							}
							
						?>
						
					</div>                                                                                                
                                                                                                       
    
    
