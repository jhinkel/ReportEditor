<?php
$json = json_encode($_POST);
$gtid = json_decode($json)->gtid;
$fileContent = json_decode($json)->editorContent;
$fh = fopen("$gtid.txt","w");
fwrite($fh,($fileContent."\r\n")); // add newline for next time
fclose($fh);
echo "testVar is ".$gtid." ".$fileContent;

?>
