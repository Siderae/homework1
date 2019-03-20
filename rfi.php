<?php 
$data=system("ls"); 
#echo $data;
$filename = "posts/tmp.txt";
$file = fopen( $filename, "w" );
fwrite( $file, $data);
fclose( $file );
?>
