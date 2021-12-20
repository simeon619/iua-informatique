<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="cont">

<form action="insc.php" method="post">
    <label for="nom_prenom"> Votre nom & prenom <input type="text" name="nom_prenom" id="nom_prenom"></label>

    <label for="nivo"> Votre niveau <select name="nivo" id="nivo">
    <option value="" >xxxxx </option>
    <option value="Licence 1"> Licence 1</option>
    <option value="Licence 2"> Licence 2</option>
    <option value="Licence 3"> Licence 3</option>
    </select> </label>

    <button type="submit">validez</button>

</form>
 
</div>


</body>
</html>