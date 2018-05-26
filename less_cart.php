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
		}else{$inte = $ar["qty"];$inte--;if($inte>0){$arra[$cont] = ["idp"=>$ar["idp"],"qty"=>$inte];print $inte;$cont++;}else{print -1;}
			
			}
	}if(empty($arra)){unset($_SESSION["Array"]);}else{$_SESSION["Array"] = $arra;}
}
 ?>
