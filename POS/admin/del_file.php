<?php
    	include('session.php');
        


       // $service = $_POST['id'];


        $id=$_GET['service'];
        $photo=$_GET['service2'];    
       // $id=$_GET['service2'];

    
   mysqli_query($conn,"call deleteimg('$id')");  
	
		if(!unlink($photo)){
		echo false;
		}                                       

?>

<script>
			window.alert('Photo deleted successfully!');
			window.location.href="http://www.fchmaintenanceservices.com/POS/admin/";
		</script>








 
	