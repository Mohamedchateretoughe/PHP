<form action="page7.php" method="POST">
<p>
<div>
<br>
    
    <br>
    <label for="m"> Matricule </label>
    <br>
    <input type="text" id="m" name="Mat" placeholder="" required/>
    <br>
    <label for="n"> Nom </label> <br>
    <input type="text" id="n" name="nom" placeholder="" required/>
    <br>
    <label for="p"> Prenom </label> <br>
    <input type="text" id="p" name="prenom" placeholder="" required/>
    <br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</p>

</form>
<table border = "1px" cellspacing= 0 style="margin-top: 50px; margin-bottom: 50px;">
      <thead>
        <tr>  
             <th style="padding: 7px;">Numero fonct</th>
             <th style="padding: 7px;">Nom fonct</th>
             <th style="padding: 7px;">Designation fonct</th>
        </tr>   
      </thead>";
<?php
while (isset($_POST['envoyer'])){
      if (isset($_POST['envoyer'])){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
    };

    echo" </table>";