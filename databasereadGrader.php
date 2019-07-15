<?php
$filename = $_POST["gtid"];
if(file_exists("submittedFiles/".$filename.".txt")){
	$file = file_get_contents("submittedFiles/".$filename.".txt");
        echo $file;
}
else{
	echo "no such file";
}
?>
