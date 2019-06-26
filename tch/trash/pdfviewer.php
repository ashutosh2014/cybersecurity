<?php
	$file= '../content/IndustrialSociology.pdf';
	$filename = 'IndustrialSociology.pdf';
	header('Content-type : application/pdf');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);
?>