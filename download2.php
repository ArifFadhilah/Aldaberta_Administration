<?php
if(ISSET($_REQUEST['file2'])){
	$file = $_REQUEST['file2'];
	
		//header("Cache-Control: public");
		//header("Content-Description: File Transfer");
	header("Content-Disposition: attachment; filename=".basename($file));
	header("Content-Type: application/octet-stream;");
		//header("Content-Transfer-Encoding: binary");
	readfile("files2/".$file2);
}
?>