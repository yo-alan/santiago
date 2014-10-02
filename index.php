<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'error'){
			if(isset($_GET['msg']))
				echo $_GET['msg'];
			else
				echo "ERROR";
		}
		if($_GET['result'] == 'exito')
			echo "EXITO";
		die();
	}
	
    include "vista/index.php";
