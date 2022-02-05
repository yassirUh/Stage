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
    #son{
        margin-left:350px;
        height:50px;
        width:800px;
        background-color:#0271c0;
        color:white;
    }
    #son p {
        font-size:19px;
        margin-left:400px;
    }
    #se1 {
        margin-top:35px;
        margin-left: 450px;
    }
    #se2 {
        margin-left: 500px;
    }
    .bouton {
        border-radius:30px;
        height:50px;
        color: white;
        background-color: #0271c0;
        margin-left: 330px;
        width: 800px;
        font-size:15px;

           
    }
    </style>
    <body>
        <div id="dv1"><img id="im1" src="img/omnitech2.JPG">        <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["formation"]  ?></b> <br>
    </p> 
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
      <span id="sp2" class="glyphicon glyphicon-cog"></span><button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">
        <form action="messagerie.php" method="POST">
        <h1 id="hP">  <span class="glyphicon glyphicon-usd"></span> Centre de paiement</h1> 
            <hr >

            <div id="son"><br> <p>SOLDE</p> </div>
            <?php
            $Total = "SELECT SUM(prix)  from paiement WHERE nom='".$_SESSION["nom"]."' AND NoDA = '". $_SESSION["NoDA"]."'"; 
            $req2 ="SELECT * from paiement WHERE nom='".$_SESSION["nom"]."' AND NoDA = '". $_SESSION["NoDA"]."'";
            $sql1 = mysqli_query($con, $req2);
             while ( $tab = mysqli_fetch_array($sql1)){
                 $session= $tab[3] ;
                 $prix = $tab[2];
                 ?> <p id="se1">  Session :  <?php echo $session; ?>  
                     <b id="se2">  <?php echo $prix ?> $ </b>   </p> <hr ><?php                 



             }
             ?>
             
             <?php
               $sql3 = mysqli_query($con, $Total);
               while ( $tab = mysqli_fetch_array($sql3)){ 
               $total = $tab[0]; ?>
             <p id ="se1"> Total :    <b id="se2"> <?php echo $tab[0] ?> $ </b>   </p> <hr ><?php    
               } ?> 
           </form >    
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input name="amount" type="hidden" value="<?php echo $total?>" />
<input name="currency_code" type="hidden" value="CAD" />
<input name="shipping" type="hidden" value="transport" />
<input name="tax" type="hidden" value="5" />
<input name="return" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="cancel_return" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="notify_url" type="hidden" value="http://localhost:10080/dashboard/COMERCE_ELECTRONIQUE/projetfinal/panier.php" />
<input name="cmd" type="hidden" value="_xclick" />
<input name="business" type="hidden" value="sb-nv9um3769942@personal.example.com" />
<input name="item_name" type="hidden" value="Le texte que vous voulez" />
<input name="no_note" type="hidden" value="1" />
<input name="lc" type="hidden" value="FR" />
<input name="bn" type="hidden" value="PP-BuyNowBF" />
<input name="custom" type="hidden" value="12542A" />
<input type="hidden" name="rm" value="2">
  <button type="submit" class="bouton"> PAYER </button></form>