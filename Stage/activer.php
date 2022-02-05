<?php
//condition de clicker sur ACTIVER 
  if (isset($_POST["valider"])){
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
            header("location:indexStu.php");
            
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
        header("location:indexStu.php");
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

      //si tous est bon on valide que c'est un professeur et on revient a la page principale
      header("location:indexStu.php");
    }

  }
  else {
      ?>
      <script>
          alert("le No DA est invalid");
          </script>
      <?php
  }
    

    }
    ?>
<!DOCTYPE html>
<html>
    <head><title>Activation</title></head>
    <style>
        #fleur{
            margin-left: 330px;
            width:300px;
            height:70px;
        }
        #pInf{
            color: #69686c;
            font-size: 17px;
            width:750px;
            margin-left: 300px;
            font-weight:bold;
        }
        #h1 {
            width:750px;
            margin-left: 300px; 
        }
        #frm{
            background-color: #f9f9f9;
            width: 500px;
            margin-left: 380px;
            border-color: black;
            border-radius: 35px;
            height:500px;
        }
        h1{
            border-top-right-radius:35px ;
            border-top-left-radius:35px ;
            text-align: center;
            height:100px;
            color:white;
            width:500px;
            background-color: #0276c9;
        }
        p{
            margin-left: 15px;
        }
        input{
            margin-left: 15px;
            background: transparent;
           border-color: transparent;
           border-bottom-color: #69686c ;
           width: 300px;
           font-size: 23px;
        }
        #submit{
            margin-left: 290px;
        height:50px;
        width: 200px;
        background-color: #2d7b30;
        color: white;
        font-size: 20px;
        font-weight:bold;
        border-radius: 15px;

        }
    #imon{
        height:50px;
    }
    #dv1{
        background-color: white;
        height:50px;
        width:100%;
        border-bottom-color:black ;
    }
    #dv1 p{
        color: #69686c;
        font-weight: bold;
        font-size: large;
        margin-left:1200px;
        margin-top: -40px;
    }
    #dvP{
        background-color: #f1ebd5
;
    }
    #champs{
        border-color:black ;
        background-color: white;
        width:1200px;
        margin-left: 150px;
    }
        
    </style>
    <body>
        <div id="dvP">
        <div id="dv1">
        <a href="indexStu.php">  <img id="imon" src="img/omnitech.JPG"></a>
            <p>©  STAGE - A2021-46XC</p>

        </div>
        <div id="champs">
        <br><br><br><br>
 
       <img id="fleur" src="img/fleur.JPG">
        <hr id="h1">
        <p id="pInf">Pour utiliser le système, vous devez vous servir de votre Numéro de Demande d'Admission. Ce numéro apparaît sur la plupart des documents officiels envoyés par l'institut ainsi que sur votre carte étudiante.<br><br>

            Pour accéder à Omnivox, vous devrez vous choisir un mot de passe à l'aide de cette page. Une fois votre mot de passe en main, vous pourrez l'utiliser pour vos prochaines visites.<br><br>
            
            Afin de vous identifier, veuillez entrer les informations personnelles afin qu'Omnivox puisse vous identifier. Toute tentative d'accès avec des données qui ne sont pas les vôtres constitue un usage frauduleux passible d'actions légales ainsi que de sanctions sévères incluant le renvoi de l'institut.
            </p>
        
        <div id="frm">
        <form method="POST" action="activer.php">
            <h1><br>Première utilisation</h1>
            <p>Numéro de Demande d'Admission (9 chiffres)</p>
            <input type="text" name="NoDA" id="NoDA" />
            <p>mot de passe</p>
            <input type="text" name="Code" id="Code" />
            <p>confirmer mot de passe</p>
            <input type="text" id="Code" /><br><br><br>
            <button name="valider" type="submit" id="submit" > VALIDER</button>
</form>
        </div>
    </div>
        </div>
    </body>
</html>