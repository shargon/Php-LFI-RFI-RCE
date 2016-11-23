<?php
$page='home.php';

if (isset($_GET['page']))
{
    $page=$_GET['page'].'.php';
}
?>
<a href="?page=home">Home</a>&nbsp;-&nbsp;<a href="?page=login">Login</a>
<?php
include ($page);
