<?php
$page='pages/home.php';

if (isset($_GET['page']))
{
  if (file_exists('pages/'.$_GET['page']))
    $page='pages/'.$_GET['page'];
}

?>
<a href="?page=home.php">Home</a>&nbsp;-&nbsp;<a href="?page=login.php">Login</a>
<?php
include ($page);
