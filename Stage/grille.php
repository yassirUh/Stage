<?php
session_start();
if (isset($_POST["quitter"])){

    session_destroy();
    header("location:indexStu.php");
    
}
if (isset($_POST["message"])){
    header("location:messagerie.php");
}
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
?>

<!DOCTYPE html>
<html>
    <head>
        <title>grille de chemin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <script>
       function  hider(){
               alert("test");
               var i =  document.getElementById("docs")
       }

        </script>
    <style> 
    #dv1{
        border-bottom: 2px black;
        height:30px;
    }
    #im1{
        margin-top:30px;
        float:left;
        margin-left: 20px;
        height:50px;
    }
    #im1:hover{
        opacity: 0.5;
    }
    #dv1 p{
        margin-top:30px;
        float:left;
        margin-left: 600px;
    }
    #im2{
        height:55px;
        margin-top: -300px;
        margin-left: 1440px;
    }
    #im2:hover{
        opacity: 0.5;
    }
    #green{
        height: 140px;
        margin-top: 10px;
        width: 100%;
    }
    #hP{
        color:#b5522d;
        margin-left:260px;    }
    hr{
        color:grey;
        width:1000px;
    }
    #docs{
        height:300px;
    }
    #docs p{
        height:220px;
        width:250px;
        border-radius:20px;
        border: 3px black solid;
        margin-top:25px;
        float:left;
        margin-left:260px;
        
    }
    #docs b{
        color:#b5522d;
    }
    span{
        margin-top:20px;
        color:black;
        margin-left:85px;
        font-size:40px;
    }
    #sp1{
        color:grey;
        float:right;
    }
    #sp1:hover{
        color:#b5522d;
    }
    #spC:hover {
        color:#b5522d;
}
    #spC{
        margin-right:60px;
        color:grey;
        float:left}

    #sp2{
        margin-left:130px;
        color:grey;
        float:left;
    }
    #sp2:hover{
        color:#b5522d;
    }
    button{
        border:0px;
        border-color:white;
        width:80px;
        background-color:white;
    }
    #mes{
        float:left;
        color:grey;
        margin-left:20px;
    }
    #sN{
        font-size:25px;
        color:green;
    }
    #sY{
        margin-left:15px;
        font-size:25px;
        color:red;
    }
    #sY:hover{
        color:grey;
    }    
    #mes:hover{
        color:#b5522d;
    }
    #tC{
        border:black 2px;
        margin-left:280px;
    }
    #tC td{
        text-align:center;
        width:60px;
        height:50px;
    }

    #nP span{
        font-size:25px;
        margin-left:40px;
    }
    #nP p{
        font-size:30px;
    }
    #nP td{
        font-size:20px;
        border-radius:15px;    
        border-color:#b5522d;}

    #temps{
        width:200px;
        font-size:25px;
        margin-top:60px;
        
        float:left;
    }    
    #lundi {
        margin-left:180px;

        border:black solid 2px;
        height:947px;
        width:200px;
        float:left;
    }  
    #lundi strong{
        color:green;

    }
    #mardi{
        border:black solid 2px;
        height:947px;
        width:200px;
        float:left;
    }  
    #mercredi{
        border:black solid 2px;
        height:947px;
        width:200px;
        float:left;
    }  
    #jeudi{
        border:black solid 2px;
        height:947px;
        width:200px;
        float:left;
    }  
    #vendredi{
        border:black solid 2px;
        height:947px;
        width:200px;
        float:left;  
    } 
    .ln{
        text-align:center;
        font-size:25px;

    } 
    .ln p {
        height:150px;
        border-bottom: black solid 3px;
    }
    .cad{
        border:black solid 2px;

    }
    </style>
    <body>
        <div id="dv1"> <a href="acceuil.php"><img id="im1" src="img/omnitech2.JPG">   </a>      <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["formation"]  ?></b> <br></br>
    </p> 
    <span id="sp2" class="glyphicon glyphicon-cog"></span>
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
    <span id="spC" class="glyphicon glyphicon-comment"></span>
      <button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">


        
        <h1 id="hP">Grille de cheminement </h1> 
            <hr >
     
        <div class="ln" id="lundi"> <p>Session 1 </p> 
    <?php
    $req2 ="SELECT * from grille WHERE session='".$_SESSION["session"]."' AND formation='".$_SESSION["formation"]."'";
    $sql1 = mysqli_query($con, $req2);
     while ( $tab = mysqli_fetch_array($sql1))
         {
            $cours= $tab[0];
            $type = $tab[1];
            $session   = $tab[2];
            $formation  = $tab[3];
        ?> <p><strong> <?php  echo $cours ;?></strong> <br>
        <?php  echo $type; ?> <br>
        <?php
          }
    ?>
    
    </div>    
        <div class="ln"  id="mardi"><p>Session 2 </p>
        <?php
    $req2 ="SELECT * from grille WHERE session='2' AND formation='".$_SESSION["formation"]."'";
    $sql1 = mysqli_query($con, $req2);
     while ( $tab = mysqli_fetch_array($sql1))
         {
            $cours= $tab[0];
            $type = $tab[1];
            $session   = $tab[2];
            $formation  = $tab[3];
        ?> <p> <?php  echo $cours ;?> <br>
        <?php  echo $type; ?> <br>
        <?php
          }
    ?>
    </div>
        <div class="ln" id="mercredi"><p>session 3 </p> 
        <?php
    $req2 ="SELECT * from grille WHERE session='3' AND formation='".$_SESSION["formation"]."'";
    $sql1 = mysqli_query($con, $req2);
     while ( $tab = mysqli_fetch_array($sql1))
         {
            $cours= $tab[0];
            $type = $tab[1];
            $session   = $tab[2];
            $formation  = $tab[3];
        ?> <p> <?php  echo $cours ;?> <br>
        <?php  echo $type; ?> <br>
        <?php
          }
    ?>
    
    </div>    
        <div class="ln" id="jeudi"><p>Session 4 </p> 
        <?php
    $req2 ="SELECT * from grille WHERE session='4' AND formation='".$_SESSION["formation"]."'";
    $sql1 = mysqli_query($con, $req2);
     while ( $tab = mysqli_fetch_array($sql1))
         {
            $cours= $tab[0];
            $type = $tab[1];
            $session   = $tab[2];
            $formation  = $tab[3];
        ?> <p><strong> <?php  echo $cours ;?></strong> <br>
        <?php  echo $type; ?> <br>
        <?php
          }
    ?>
    
    </div>    
        <div class="ln" id="vendredi"><p>Session 5 </p> 
        <?php
    $req2 ="SELECT * from grille WHERE session='5' AND formation='".$_SESSION["formation"]."'";
    $sql1 = mysqli_query($con, $req2);
     while ( $tab = mysqli_fetch_array($sql1))
         {
            $cours= $tab[0];
            $type = $tab[1];
            $session   = $tab[2];
            $formation  = $tab[3];
        ?> <p> <?php  echo $cours ;?> <br>
        <?php  echo $type; ?> <br>
        <?php
          }
    ?>
    
    </div>    
            