<?php 
$data=system("ls"); 
#echo $data;
$filename = "/var/www/posts/first.inc.php";
$file = fopen( $filename, "w" );
fwrite( $file, $data);
fclose( $file );
?>
