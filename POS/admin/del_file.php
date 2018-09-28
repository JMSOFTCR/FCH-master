<?php
    	include('session.php');
        


       // $service = $_POST['id'];


        $photo=$_GET['service'];
       // $id=$_GET['service2'];

    
   mysqli_query($conn,"call deleteimg('$photo')");  
	
		if(!unlink($photo)){
		echo false;
		}                                       

?>

<script>
			window.alert('Photo deleted successfully!');
			window.location.href="http://www.fchmaintenanceservices.com/POS/admin/";
		</script>








 
	