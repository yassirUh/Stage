<?php
//condition de clicker sur ACTIVER 
  if (isset($_POST["activer"])){
   //la session commence pour la sauvegarde des données
    session_start(); 

    //donnée pour la connexion à la bdd
    $host="localhost";
    $name="root";
    $pass="";
    $database="Stage";

    //connexion à la bdd
    $con = new mysqli($host,$name,$pass,$database);
    if ($con-> connect_error){
        die("failed to connect ". $con-> connect_error);     
    }
    
    //verification de la validité du NumDA
    $req = "SELECT * FROM Etudiant WHERE NoDA='". $_POST["NoDA"] ."'";
    $reqVEF = mysqli_query($con,$req);
    $reqVEF2=mysqli_num_rows($reqVEF);

    //si le NoDA est valide
    if ($reqVEF2 > 0) {
        //on peu prendre le nouveau mot de passe
        $reqUPD = "UPDATE Etudiant SET Code='". $_POST["Code"] ."' WHERE NoDA='". $_POST["NoDA"] ."'";
        //validation de la requette
        $reqUPDval = mysqli_query($con,$reqUPD);
        
        if ($reqUPD){
            //revenir à la page index
            header("location:index.php");
      
        }
    }
    else {
         echo "erreur";
    }
  }
  ?>
  <!DOCTYPE html>
  <html>
      <form action="activerCompte.php" method="POST">
          <input name="NoDA" type="text"/>
          <input name="Code" type="text"/>
          <button type="submit" name="activer">activer</button>
</form>
 </html>