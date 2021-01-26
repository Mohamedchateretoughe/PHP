<!DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
    <p>Saisir deux valeurs dans deux champs de type input</p>
    <form action="page6a.php" method="post">
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
   
</form>
</body>
</html>