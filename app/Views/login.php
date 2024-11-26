<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <?php
     if(isset($_POST['submit'])){
        $matricule= $_POST['matricule']
        $matricule= $_POST['poste']
     }

     if ($matricule === 'admin' && $poste === 'password123') {
        echo "Connexion réussie !";
    } else {
        echo "Identifiants incorrects.";
    }
   ?>

   <form method="post">
        <label for="matricule">Numero matricule:</label>
        <input type="text" name="matricule" id="matricule">
        <label for="post">votre poste :</label>
        <input type="post" name="post" id="post">   

        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>