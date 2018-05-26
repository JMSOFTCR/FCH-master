<?php
// Pagination links configuration
$pagConfig = array('baseURL'=>'getData.php', 'totalRows'=>$rowCount, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
// Initialize pagination class
$pagination =  new Pagination($pagConfig);
?>


<!-- Display pagination links -->
<?php echo $pagination->createLinks(); ?>