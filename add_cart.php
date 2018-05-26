<?php
session_start();
if(isset($_REQUEST["idp"]) && isset($_REQUEST["qty"])) {
	if(isset($_SESSION["Array"]) && isset($_SESSION["cart"])){
			$exisArray = $_SESSION["Array"];
			$exisArray[$_SESSION["cart"]+1] = ["idp"=>$_REQUEST["idp"],"qty"=>$_REQUEST["qty"]];
			$_SESSION["Array"] = $exisArray;
			$_SESSION["cart"]+=1;	
		}else{
			$_SESSION["cart"] = 0;
			$carArray = array();
			$carArray[$_SESSION["cart"]] = ["idp"=>$_REQUEST["idp"],"qty"=>$_REQUEST["qty"]];
			$_SESSION["Array"] = $carArray;
		}
	}
?>