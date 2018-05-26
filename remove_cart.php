<?php 
session_Start();
if(isset($_SESSION["Array"])){
	$var = $_REQUEST["idp"];
	$arra = array();
	$cont=0;
	foreach ($_SESSION["Array"] as $ar) {
		if($ar["idp"] != $var){
			$arra[$cont] = ["idp"=>$ar["idp"],"qty"=>$ar["qty"]];
			$cont++;
		}else{$_SESSION["cart"] -=1;$cont++;}
	}if(empty($arra)){unset($_SESSION["Array"]);}else{$_SESSION["Array"] = $arra;}
}
 ?>
