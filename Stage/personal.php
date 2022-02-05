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
if (isset($_POST["conf"])){
    $sql = "UPDATE ETUDIANT SET Code ='".$_POST["code"]."' WHERE nom='".$_SESSION['nom']."'";
    //validation de la requette
    $reqADDmess = mysqli_query($con,$sql);
    if ($reqADDmess){
        ?> <script> alert("le mot de pass a changé avec succée");</script> <?php
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
    #iden{
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
    </style>
    <body>
        <div id="dv1"><a href="acceuil.php"><img id="im1" src="img/omnitech2.JPG">   </a>     <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["formation"]  ?></b> <br>
    </p> 
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
      <span id="sp2" class="glyphicon glyphicon-cog"></span><button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">
        <h1 id="hP">           <span class="glyphicon glyphicon-user"></span> Mon compte</h1> 
            <hr >
            
            <div id="iden"><div id="imAp"> <img src="<?php echo 'img/'.$_SESSION['photo']?>">  <p>Étudiant 2022-2023</p>
            <p id="modif" onclick="myFunction()"> modifier mon mot de pass </p>

        </div>   <div  id="naF"> <p>Nom de famille : <br><strong>  <?php echo  $_SESSION['prenom'] ?></strong> </p> 
                            <p>Prénom         : <br><strong>  <?php echo $_SESSION['nom'] ?></strong></p> 
                            <p>Code permanent         : <br><strong>  <?php echo $_SESSION['NoDA'] ?></strong></p> 
                            <span class="glyphicon glyphicon-qrcode"></span></div>

                        </div>
                        
                   <div id="naM"> 
                       
                   <form method="POST"  action="personal.php"> 
                       
                   <input  placeholder="Saisissez le nouveau mot de pass :"type="text">
                   <input name="code" placeholder="Confirmer le nouveau mot de pass :" type="text"><br>
                    <input id="minf" name="conf" type="submit" value="Confirmer" ></form>
                </div>
                  <?php echo $_SESSION["photo"]; ?>
                <script>
function myFunction() {
  var x = document.getElementById("naM");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>               

