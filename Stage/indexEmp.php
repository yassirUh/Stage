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
    $req = "SELECT * FROM employe WHERE NoDA='". $_POST["NoDA"] ."' AND  Code='".$_POST["Code"]."'";
    $reqVEF = mysqli_query($con,$req);
    $reqVEF2=mysqli_num_rows($reqVEF);

    //si le NoDA est valide
    if ($reqVEF2 > 0) {
        while ( $tab = mysqli_fetch_array($reqVEF) ){
        
            $_SESSION["nom"] = $tab[0];
            $_SESSION["prenom"] = $tab[1];
            $_SESSION["type"] = $tab[2];
            $_SESSION["NoDA"] = $tab[3];
            $_SESSION["code"] = $tab[4];
              

        }
        header("location:acceuilEmp.php");
    }
   
}
?>
<!DOCTYPE html>
<html>
    <style>
       body{
           background-image: url("img/log.JPG");
           background-size:cover;
       }
       #dvP{
          opacity: 0.85;
          width:460px;
          height:770px;
          margin-left: 1060px; 
          background-color: #e0f4fc;
       }
       #btnEt a{
        color: #f06c00;
        text-decoration:none;
       }
       #btnEm a{
           color:white;
           text-decoration :none;
       }
       #imInt{
           width: 350px;
           height:90px;
           margin-left: 50px;
       }
       #btnEt{
           margin-left: 100px;
           color: #f06c00;
           background-color: #e0f4fc;
           height:50px;
           width: 160px;
           font-size: 20px;
           font-weight:bold;
           border-top-left-radius: 25px;
           border-bottom-left-radius: 25px;

           border-color: #f06c00;
       }
       
       #btnEm{
           margin-left: -7px;
           color: white;
           background-color: #f06c00;
         
           height:50px;
           width: 160px;
           font-size: 20px;
           font-weight:bold;
           border-top-right-radius: 25px;
           border-bottom-right-radius: 25px;
           border-color: #f06c00;

       }
       p{
           margin-left: 70px;
           color: #69686c;
       }
       #noDA{
           margin-left: 70px;
           background: transparent;
           border-color: transparent;
           border-bottom-color: #69686c ;
           width: 350px;
           font-size: 23px;

       }
       #noDA:focus{
           
           margin-left: 70px;
           background: transparent;
           border-color: transparent;
           border-bottom-color: #0079c9 ;
           width: 350px;
           font-size: 23px;

       }
       #Code{
        margin-left: 70px;
           background: transparent;
           border-color: transparent;
           border-bottom-color: #69686c ;
           width: 350px;
           font-size: 23px;
       }
       #Sub{
        margin-left: 230px;
        height:50px;
        width: 200px;
        background-color: #2d7b30;
        color: white;
        font-size: 20px;
        font-weight:bold;
        border-radius: 15px;

       }
       #pS{
           margin-left:130px ;
           font-weight:bold;

       }
    </style>
    <head><title>login</title></head>
    <body>
        <div id="dvP">
            <br><br><br><br>
          <img  id="imInt" src="img/omnivox.JPG"/>
          <br><br><br><br>

          <button  id="btnEt" ><a href="indexStu.php">Etudiant</a></button>
          <button id="btnEm"><a href="indexEmp.php">Employes</a></button>
          <br><br><br><br>
          <p>No de DA</p>
          <form method="POST" action="indexEmp.php">
          <input id="noDA" type="text" name="NoDA" placeholder="00000000"/>
          <br><br>
          <p>Mot de passe</p>
          <input id="Code" type="password" name="Code" placeholder="*******" />
          <br><br><br>
          <button id="Sub" type="submit" name="activer"  >Connexion >  </button>
    </form>
          <br>
          <p><a href="activer.php"> Premiere utilisation? </a></p>
          <p>Reinistialiser votre mot de passe</p>
          <p id="pS">©  STAGE - A2021-46XC</p>
        </div>


          


        </div>

    </body>
</html>