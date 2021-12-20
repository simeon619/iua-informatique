<?php  
$a =$_POST['nom_prenom'];
$b =$_POST['nivo'];
if (  !(empty($_POST['nom_prenom']))  && !(empty($_POST['nivo']))  ) {
$db = new PDO('mysql:host=localhost;dbname=info;charset=utf8','root','');

$sql='INSERT INTO presi VALUES(?,?,?)';

$insertPres = $db->prepare($sql);
$insertPres -> execute([$a, $b, 0]);

}

?> 

<?php  include('inscr.php') ; 

exit();
?>