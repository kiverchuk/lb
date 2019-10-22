<?php
require_once 'app/core/APP.php';

class Masiv
{
    function add(){
		$_SESSION["number"][] = $_POST["number"];
    }
    
	function show(){
		if( isset($_GET["index"]) AND !empty($_GET["index"]) ){
			if( count($_SESSION["number"]) >=  $_GET["index"]){
				return [ $_GET["index"] => $_SESSION["number"][$_GET["index"]] ];
            }
        }else{
            return  $_SESSION["number"];
        }
		return false;
    }
    
	function del(){
		if( isset($_GET["index"]) AND !empty($_GET["index"]) AND count($_SESSION["number"]) >=  $_GET["index"]){
			unset($_SESSION["number"][$_GET["index"]]);
			return true;
		}
		return false;
	}
  
}
