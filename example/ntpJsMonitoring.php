<?php
// $headers = apache_request_headers();
// foreach ($headers as $header => $value) {
//     echo "$header: $value <br />\n";
// }
// echo "<hr>";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
		$str  = date("Y-m-d H:i:s") .", ";
		$str .= $_POST['message'] .", ";
		$str .= $_POST['filename'] .", ";
		$str .= $_POST['line'] .", ";
		$str .= $_POST['col'] .", ";
		$str .= $_POST['description'];
	fwrite($myfile, $str."\n");
	fclose($myfile);	
}
