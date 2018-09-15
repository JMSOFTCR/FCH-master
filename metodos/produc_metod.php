<?php

    $conn = new PDO('mysql:host=localhost;dbname=pos', 'root', '');
    $stm = null;
    try
    {
      $result = array();

      $stm = $conn->prepare("SELECT * FROM ");
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_OBJ);
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }

?>
