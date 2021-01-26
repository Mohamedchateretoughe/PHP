<DOCTYPE HTML>
<html larg="fr">
<head>
     <meta charset="UTF-8">
</head>

<body>
  <p>Affichage des données du formulaire</p>

  <ul>
  <li><?php echo $_POST['matricule']; ?></li>
  <li><?php echo $_POST['nom']; ?></li>
  <li><?php echo $_POST['prenom']; ?></li>
  <li><?php echo $_POST['sexe']; ?></li>
  <li><?php echo $_POST['com']; ?></li>
  <li><?php echo $_POST['choisir']; ?></li>
  <li><?php echo $_POST['choisir1']; ?></li>

  </ul>
  

</body>
</html>