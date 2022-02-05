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
    
    //verification de la validité du NumDA  pour Etudiant
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
            echo "etudiant";

            
        }
    }
    //verification de la validité du NumDA  pour les enseignant
    $req2 = "SELECT * FROM Enseignant WHERE NoDA='". $_POST["NoDA"] ."'";
    $reqVEFE = mysqli_query($con,$req2);
    $reqVEF3=mysqli_num_rows($reqVEFE);
    if ($reqVEF3 > 0 ) { 
        //on peu prendre le nouveau mot de passe
        $reqUPD2 = "UPDATE Enseignant SET Code='". $_POST["Code"] ."' WHERE NoDA='". $_POST["NoDA"] ."'";

        //validation de la requette
        $reqUPDval = mysqli_query($con,$reqUPD2);
      if ($reqUPD2){

        //si tous est bon on valide que c'est un professeur 
        echo "Professeur";
      }

    }
     //verification de la validité du NumDA  pour les directeurs
     $req3 = "SELECT * FROM Directeur WHERE NoDA='". $_POST["NoDA"] ."'";
     $reqVEFD = mysqli_query($con,$req3);
     $reqVEFDI=mysqli_num_rows($reqVEFE);


    if ($reqVEFDI > 0 ) { 
      //on peu prendre le nouveau mot de passe
      $reqUPDD = "UPDATE Directeur SET Code='". $_POST["Code"] ."' WHERE NoDA='". $_POST["NoDA"] ."'";

      //validation de la requette
      $reqUPDval = mysqli_query($con,$reqUPDD);
    if ($reqUPDD){

      //si tous est bon on valide que c'est un professeur 
      echo "Directeur";
    }

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