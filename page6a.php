<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>

  <table style="width:90%">
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
  

</body>
</html>