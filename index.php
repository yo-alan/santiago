<?php
    if(isset($_GET['result'])){
		if($_GET['result'] == 'error')
			echo "ERROR";
		if($_GET['result'] == 'exito')
			echo "EXITO";
		die();
	}
	
    include "vista/index.php";
