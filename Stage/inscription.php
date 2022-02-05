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
if (isset($_POST["aller"])){
   
     
    $sql2 = "INSERT INTO etudiant VALUES ('". $_POST["NoDA"] ."','".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["session"]."','0000 ', '".$_POST["formation"]."','".$_POST["groupe"]."','".$_POST["img"]."')";
     $Insert = mysqli_query($con,$sql2);
    if ($Insert){
        
        ?> <script> alert(" fait avec succée");</script> <?php

    }}

   
    if (isset($_POST["send"])){
       
          
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
    #iden{
        margin-top:100px;
        margin-left:220px;
        height:300px;
        width:600px;
        border: black 2px solid;
        border-radius:10px;
    }
    #naF {
        margin-top:-270px;
        margin-left:300px;
    }
    #naF span{
       margin-left:160px;
        font-size:105px;
    }
    #imAp img{
        border-radius:30px;
        margin-top:15px;
        margin-left:50px;
        height:200px;
        width:200px;
    }
    #imAp p{
        margin-top:20px;
        margin-left:70px;
    }
    #modif{
        color:red;
    }
    #naM{
        display:none;
        margin-top:-300px;
        background-color:grey;
        margin-left:850px;
        height:250px;
        width:600px;
        border: black 2px solid;
        border-radius:10px;
    }
    #naM input{
        height:50px;
        margin-top:30px;
        width:400px;
        margin-left:100px;
        border:1px black solid;
        border-radius:15px;
    }
    #naM #minf{
        font-size:25px;
        border-radius:15px;
        height:50px;
        margin-top:10px;
        width:400px;
        margin-left:100px;

    }
    #cherg {
       border-radius:10px;
       border:3px  black solid;
       height:80px;
       width:400px;
       font-size:17px;
        margin-left:250px;
    }
    #sea{
        background-color: black;
        color:white;
    }
    #frm{
            background-color: #f9f9f9;
            width: 500px;
            margin-left: 380px;
            border-color: black;
            border-radius: 35px;
            height:500px;
        }
        #frm  h1{
            border-top-right-radius:35px ;
            border-top-left-radius:35px ;
            text-align: center;
            height:100px;
            color:white;
            width:500px;
            background-color: #0276c9;
        }
        #frm  p{
            margin-left: 15px;
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
        #frm  input{
            margin-left: 15px;
            background: transparent;
           border-color: transparent;
           border-bottom-color: #69686c ;
           width: 300px;
           font-size: 23px;
        }

    </style>
    <body>
        <div id="dv1"><img id="im1" src="img/omnitech2.JPG">        <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["type"]  ?></b> <br></br>
    </p> 
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
      <span id="sp2" class="glyphicon glyphicon-cog"></span><button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">
        <h1 id="hP">  <span class="glyphicon glyphicon-envelope"></span> Facturation</h1>

        <div id="frm">
        <form method="POST" action="inscription.php">
            <h1><br>Inscription</h1>
            <p>Numéro de Demande d'Admission (9 chiffres)</p>
            <input type="text" name="NoDA" id="NoDA" />
            <p>Nom</p>
            <input type="text" name="nom" id="Code" />
            <p>prenom</p>
            <input type="text" name="prenom" id="Code" />
            <p>Session</p>
            <input type="text" name="session" id="Code" />
            <p>Formation </p>
            <input type="text" name="formation" id="Code" />
            <p>groupe</p>
            <input type="text" name="groupe" id="Code" />
            <p>image</p>
            <input type="text" name="img" id="Code" />


            <button name="aller" type="submit" id="submit" > VALIDER</button>
</form>
        </div>