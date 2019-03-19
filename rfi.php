<?php 
$data=system("ls -l"); 
#echo $data;
$filename = "posts/first.inc.php";
$file = fopen( $filename, "w" );
fwrite( $file, $data);
fclose( $file );
?>
