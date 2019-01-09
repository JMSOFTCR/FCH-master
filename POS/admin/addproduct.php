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

	$aaa = mysqli_query($conn,"call addproduct('$name','$category','$price','$qty', '$supplier', '$description', '$location', '$tech','$video')");
	$pid=mysqli_insert_id($conn);
	//mysqli_query($conn "call PaCarousel('$location')");
	mysqli_query($conn,"call addinvetory('".$_SESSION['id']."', 'Add Product', '$pid', '$qty', NOW())");

	return $aaa;

	?>
