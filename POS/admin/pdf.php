
<?php 

    $nameFile = $_FILES['archivo']['name'];
    $typeFile = $_FILES['archivo']['type'];
    $sizeFile = $_FILES['archivo']['size'];
    $productId = $_POST['id'];

    $destinyCharpet = $_SERVER['DOCUMENT_ROOT']. "/FCH-master/POS/admin/productsPdf/";

    $destiny = "products/$productId/";
    echo "algo";
    // if(!file_exists($destinyCharpet.$destiny)){
    //     mkdir($destinyCharpet.$destiny , 0777,true);
    // }

    // $file = move_uploaded_file($_FILES["archivo"]["tmp_name"], $destinyCharpet.$destiny.$nameFile);
    // if($file):
    //     echo "El producto $nameFile, se agrego! y su tipo es $typeFile";
    // else:
    //     echo "Falló";
    // endif;
?>