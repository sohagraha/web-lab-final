<?php
$str= '123456'; 
echo substr(chunk_split($str, 2, ':'), 0, -1)."\n";
?>