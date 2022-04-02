<?php 

	function error_msg($error,$msg){
		header('location:connexion.php?' . $error . '=' . $msg);
		exit;
	}

	function verif_champ($type,$error,$msg){
		if(!isset($type) || empty($type)){
			error_msg($error,$msg);
		}
	}

?>