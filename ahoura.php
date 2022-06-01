
<?php

if(isset($_POST['bouton_envoie'])) {
    if(isset($_POST['espace_text']) AND !empty($_POST['espace_text'])) {
        $text = $_POST['espace_text'];
        file_put_contents('recupe.txt', $text);
    }
}
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="styles.css"> 
</head>

<body>

    <form method="post" class="form">
        <font color="white">Ecrivez votre text ici :</font><br><br>
        <textarea class= "textarea" name="espace_text" cols="30" rows="10"></textarea><br> 
        <button class= "button" type="submit" name="bouton_envoie">Envoyez</button>
    </form>


</body>
</html>