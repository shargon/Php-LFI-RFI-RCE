<?php
$page='pages/home.php';

if (isset($_GET['page']))
{
  switch($_GET['page'])
  {
    case 'home' :
    case 'login': $page='pages/'.$_GET['page']; break;
  }
}

?>
<a href="?page=home.php">Home</a>&nbsp;-&nbsp;<a href="?page=login.php">Login</a>
<?php
include ($page);
