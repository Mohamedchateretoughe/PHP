<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
    <p>Saisir deux valeurs dans deux champs de type input</p>
    <form action="page5.php" method="post">
     Matricule <br> <input type="text" name="matricule"/></br>
     Nom: <br> <input type="text" name="nom"/></br>
     Prenom: <br> <input type="text" name="prenom"/></br>

    <p> <input type="radio" name="sexe" value="h" checked="checked">
         <label for="sexe">Masculin</label>
         <input type="radio" name="sexe" value="f">
         <label for="sexe">Féminin</label>
    </p>

    <p> <label for="memo">Adresse</label>
        <textarea name="com" cols="19" rows="2"></textarea>
    </p>

    <p> <label for="choisir">Service</label>
        <select name="choisir">
        <option value="">Choisir</option>
        <option value=""></option>
        </select>
    </p>

    <p> <label for="choisir1">Fonction</label>
        <select name="choisir1">
        <option value="">Choisir</option>
        <option value="">Professeur</option>
        </select>
    </p>
    
    <p>  
    <input type="submit" value="Valider" name="Valider" ><input type="submit" value="Reinitialiser" name="Reinitialiser" style="margin-left:30px;"><br><br>
    </p>
    
        if (isset($_GET["Valider"])) {
    
            <table style="width:100%" style="border: 1px solid black; border-collapse:collapse;">
            <tr>
                    <th style="border:1px solid black;">Matricule</th>
                    <th style="border:1px solid black;">Nom</th>
                    <th style="border:1px solid black;">Prenom</th>
                    <th style="border:1px solid black;">Genre</th>
                    <th style="border:1px solid black;">Adresse</th>
                    <th style="border:1px solid black;">Service</th>
                    <th style="border:1px solid black;">Fonction</th>
                </tr>
            <tr>
            <th><?php echo $_POST['matricule']; ?></th>
            <th><?php echo $_POST['nom']; ?></th>
            <th><?php echo $_POST['prenom']; ?></th>
            <th><?php echo $_POST['sexe']; ?></th>
            <th><?php echo $_POST['com']; ?></th>
            <th><?php echo $_POST['choisir']; ?></th>
            <th><?php echo $_POST['choisir1']; ?></th>
            </tr>
            </table> 
 
</form>
</body>
</html>

