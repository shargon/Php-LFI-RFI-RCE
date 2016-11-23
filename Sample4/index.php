<?php
$image='logo';

if(isset($_FILES['user_file']))
{
	$file = basename($_FILES['user_file']['name']);
	if(pathinfo($file)['extension']=='jpg' &&
		move_uploaded_file($_FILES['user_file']['tmp_name'], $file)) 
	    $image=basename($file,'.jpg');
}

?>

Upload only jpg files:

<form enctype="multipart/form-data" action="index.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="user_file" type="file" />
    <input type="submit" value="Send" />
</form>

Image:<br>
<img src='image.php?value=<?php echo $image; ?>'>

