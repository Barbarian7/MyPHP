<?php 
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="abc.pdf"');
readfile('opendns.pdf'); 
?>