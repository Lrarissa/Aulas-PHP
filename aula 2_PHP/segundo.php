<?php

	$nome = $_POST['nome'];
	$quant = $_POST['quant'];
	
	while ($quant>0) {
		print $nome . "<br>";
		$quant--; 
	}
		
?>