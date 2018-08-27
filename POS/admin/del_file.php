<?php
    	include('session.php');
        


        $service = $_POST['id'];


       // $photo=$_GET['Nom'];
    
   mysqli_query($conn,"DELETE from carousel WHERE photo LIKE '%$service' ");  
		chmod($file,0777);
		if(!unlink($photo)){
		echo false;
		}                                       

?>








 
	