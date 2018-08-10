<?php
    	include('session.php');

    $photo=$_GET['photo'];
                                       
	/*	chmod($file,0777);
		if(!unlink($file)){
		echo false;
		}
	}*/

 mysqli_query($conn,"call BorrarIMG('$photo')"); 
	
?>