



<?php 

$db = new PDO('mysql:host=localhost;dbname=info;charset=utf8', 'root', '');
$etud = $db->prepare('ALTER TABLE `presi` DROP `nbr_vote`;');

$etud->execute();

$etud = $db->prepare('ALTER TABLE `presi` ADD `nbr_vote` INT(199) NOT NULL AFTER `nivo`;');

$etud->execute();


$etud = $db->prepare('ALTER TABLE `info` DROP `a_vote`;');
$etud->execute();


$etud = $db->prepare('ALTER TABLE `info` ADD `a_vote` BOOLEAN NOT NULL AFTER `pre_l1`;');
$etud->execute();

?>

<?php  

header('Location: win.php');

exit();

?>