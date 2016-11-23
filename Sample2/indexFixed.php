<?php
$page='home.php';

if (isset($_GET['page']))
{
    switch($_GET['page'])
	{
	case 'home' :
	case 'login': $page=$_GET['page'].'.php'; break;
	}
}
?>
<a href="?page=home">Home</a>&nbsp;-&nbsp;<a href="?page=login">Login</a>
<?php
include ($page);
