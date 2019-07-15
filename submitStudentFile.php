<?php
$filename = $_POST["gtid"];
if(file_exists($filename.".txt")){
	rename("$filename.txt","submittedFiles/$filename.txt");
        echo $file;
}
else{
	echo "no such file";
}
?>
