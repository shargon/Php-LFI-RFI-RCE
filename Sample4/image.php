<?php
$image='logo.jpg';

if(isset($_GET['value']) && file_exists($_GET['value'].'.jpg'))
{
	$image=$_GET['value'].'.jpg';
}

header('Content-Type: image/jpeg');
include($image);
?>
