<?PHP
$u=$_POST["university"];
$exp=time()+(60*60*24);
setcookie('c',$u,$exp);
setcookie('c1',$u,$exp);
setcookie('c2',$u,$exp);
echo '<a href="allcookiesdetails.php">cookie</a>';
?>
