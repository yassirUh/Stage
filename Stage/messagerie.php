<?php
session_start();
$host="localhost";
$name="root";
$pass="";
$database="Stage";
include_once("cript.php");
//connexion à la bdd
$con = new mysqli($host,$name,$pass,$database);
if ($con-> connect_error){
    die("failed to connect ". $con-> connect_error);     
}
if (isset($_POST["quitter"])){

    session_destroy();
    header("location:indexStu.php");
    
}
if (isset($_POST["message"])){
    header("location:messagerie.php");
}
if (isset($_POST["send"])){
   
    $sql = "INSERT INTO messagerie VALUES ('".$_POST["nomDes"]."','".$_SESSION["nom"]."','".$_POST["sujet"]."','".$_POST["message"]."')";
     //validation de la requette
     $reqADDmess = mysqli_query($con,$sql);
    if ($reqADDmess){
        ?> <script> location.reload();</script> <?php
    }}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>acceuil</title>
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
        margin-left: 700px;
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
        
    }
    #sp1{margin-top:20px;
        color:black;
        margin-left:85px;
        font-size:40px;
        color:grey;
        float:right;
    }
    #sp1:hover{
        color:#b5522d;
    }
    #sp2{
        margin-top:20px;
        color:black;
        font-size:40px;
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
        margin-top:20px;
        color:black;
        margin-left:85px;
        font-size:40px;
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
    #pdes{
        margin-left:250px;
        font-size:25px;
    }
    #pdes input{
        border-color:#b5522d;
        border-radius:15px;
        width:300px;
        margin-left:30px;
    }
    #pde{
        margin-left:250px;
        font-size:25px;
    }
    #pdes span{
        color:#b5522d;
        margin-right:60px;
    }
    #pde input{
        border-color:#b5522d;
        border-radius:15px;
        width:650px;
        margin-left:225px;
    }
    #pde span{
        color:#b5522d;
        margin-right:60px;
    }
    #mesa{
        margin-left:250px;
        font-size:25px;
    }
    #mesa span{
        color:#b5522d;
        margin-right:60px;
    }
    #mesa textarea{
        height:350px;
        border-color:#b5522d;
        border-radius:15px;
        width:850px;
        margin-left:225px;
    }
    #mesa span{
        color:#b5522d;
        margin-right:60px;
    }
    #sen{
        font-size:30px;
        margin-left:1200px;
        color:#b5522d;;
    }
    #mess{
        font-size:20px;
        margin-left:250px;

    }
    #mess span{
        color:#0381d6;

    }
    #mess b{
        margin-left:30px;
    }
    #mesg{
        color:grey;
        font-size:18px;
        margin-left:400px;
    }

    #mess u {
        margin-left:150px;
    }
    
    </style>
    <body>
        <div id="dv1"><img id="im1" src="img/omnitech2.JPG">        <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["formation"]  ?></b> <br></br>
    </p> 
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
      <span id="sp2" class="glyphicon glyphicon-cog"></span><button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">
        <form action="messagerie.php" method="POST">
        <h1 id="hP">  <span class="glyphicon glyphicon-envelope"></span> Messagerie</h1> 
            <hr >
           <p id="pdes"> <span class="glyphicon glyphicon-user"></span>  Ajouter un destinataire    : <input placeholder="Nom du destinataire" type="text" name="nomDes"> 
           <input placeholder="Prénom du destinataire" type="text" name="prenomDes"></p> 
           <p id="pde"> <span  class="glyphicon glyphicon-log-out"></span> Sujet    :               <input type="text" name="sujet" ></p>  
           <p id="mesa"><b>  Message : <b> <br> <textarea type="text" name="message"></textarea></p>
           <button type="submit" id="sen" name="send"> <span class="glyphicon glyphicon-share-alt"> Envoyer</span></button>
        <form>
           <h1 id="hP">  <span class="glyphicon glyphicon-envelope"></span> Message reçu</h1> 
            <hr >
            <?php

            $req2 ="SELECT * from messagerie WHERE destinataire='".$_SESSION["nom"]."'";
            $sql1 = mysqli_query($con, $req2);
             while ( $tab = mysqli_fetch_array($sql1)){
 
             //selon votre style css vous pouvez modifier l'Affichage
             $_SESSION["destinateur"] =  $tab[1] ;
             $_SESSION["sujet"]= $tab[2];
             $_SESSION["message"]=$tab[3];
             ?> <p id="mess"><span class="glyphicon glyphicon-user"></span> 
                 <b>
                 <?php echo $_SESSION["destinateur"];  ?></b>
              <u>  <?php   echo $_SESSION["sujet"];  ?></u>
              <span id="spow" class="glyphicon glyphicon-trash"></span>

              <br> <p id="mesg"> <?php echo $_SESSION["message"]; ?>
            </p> <hr> <?php  } ?> 

