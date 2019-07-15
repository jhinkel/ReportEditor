<?php
$filename = $_POST["gtid"];
if(file_exists('submittedFiles/'.$filename.".txt")){
	rename('submittedFiles/'.$filename.".txt",$filename.".txt");
}
else{
	echo "no such file";
}
?>
