<?php 
$data=system("ls -l"); 
#echo $data;
$filename = "tmp.txt";
$file = fopen( $filename, "w" );
$filesize = filesize( $filename );
fwrite( $file, $data);
fclose( $file );
?>
