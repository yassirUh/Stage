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

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cal.css">
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
        margin-left:250px;
        color:grey;
        width:800px;
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
    #vip{
        color:white;
        background-color:#b5522d;
    }
    #tC{
        border-radius:30px;
        border:black solid; 2px;
        margin-left:280px;
    }
    #tC td{
        border:grey solid 1px;
        text-align:center;
        width:60px;
        height:50px;
    }
    #tC td:hover{
        background-color: grey;
    }
    #nP{
        color:white;
        background-color:#b5522d;
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
    #dvL{
        border-right:grey solid 1px;
        margin-top:40px;
        margin-left:25px;
        float:left;
        width:160px;
        height:800px;
    }
    #dvL h4{
        color:#b5522d;
    }
    #dvL p{
        color:#0172be;
    }
    #dvL span{
        margin-right:3px;
        color:#0172be;
        margin-left:0px;
        font-size:20px;
    }
    #dvR {
        border-left:grey solid 1px;
        margin-top:-500px;
        float:right;
        width:360px;
        height:400px;
    }
    #dvR h2{
        margin-left:10px;
        color:#b5522d;

    }
    #sol {
        margin-left:10px;

        margin-top:15px;
        border-radius:15px;
        border : #68ba12 solid 1px;
        width:300px;
        height:80px;

    }

    #sol span{
        margin-left:14px;
        color:white;
        background-color:#68ba12 ;

    }
    #sol div{
        border-top-left-radius:15px;
        border-bottom-left-radius:15px;
        width:70px;
        margin-top:0px;
        height:80px;
        margin-left:0px;
        color:white;
        background-color:#68ba12 ;
    }
    #sol p{
        font-size:15px;
        margin-left:90px;
        color:#0172be;
        margin-top:-50px;
    }
    #sol2 {
        margin-left:10px;
        margin-top:10px;
        border-radius:15px;
        border : #3f88d4 solid 1px;
        width:300px;
        height:80px;

    }
    
    #sol2 span{
        margin-left:14px;
        color:white;
        background-color:#3f88d4;

    }
    #sol2 div{
        border-top-left-radius:15px;
        border-bottom-left-radius:15px;
        width:70px;
        margin-top:0px;
        height:80px;
        margin-left:0px;
        color:white;
        background-color:#3f88d4 ;
    }
    #sol2 p{
        font-size:15px;
        margin-left:90px;
        color:#0172be;
        margin-top:-50px;
    }
    #sol2 p:hover{
        color:#b5522d;
    }
    #sol p:hover{
        color:#b5522d;
    }
    #job{
        
        margin-left:250px;
        height:300px;
        width:250px;
    }
    #job img{
        border-radius:120px;

        height:250px;
        width:250px;

    }
    #job1{
        margin-top:-300px;
        margin-left:520px;
        height:300px;
        width:250px;
    }
    #job1 img{
        border-radius:120px;

        height:250px;
        width:250px;

    }
    #job2{
        margin-top:-300px;
        margin-left:820px;
        height:300px;
        width:250px;
    }
    #job2 img{
        border-radius:120px;

        height:250px;
        width:250px;

    }
    #evenr{
        border-radius:15px;
        margin-top:-280px;
        margin-left:800px;
        height:50px;
        width:500px;
        background-color:#e0e0e0;

    }
    #evenr span{
        margin-left:35px;
        font-size: 22px;
    }
    #evenr p{
        margin-top:-22px;
        margin-left:35px;
        color:grey;
        font-size:16px;
    }
   

    

    </style>
    <body>
        
        <div id="dv1"><img id="im1" src="img/omnitech2.JPG">        <p><?php echo  $_SESSION["prenom"].' '.  $_SESSION["nom"]?> <br><b> <?php echo $_SESSION["formation"]  ?></b> <br></br>
    </p> 
    <span id="sp2" class="glyphicon glyphicon-cog"></span>
    <form method="POST" action="acceuil.php">  
    <button type="submit" name="message">  <span  id="mes"class="glyphicon glyphicon-envelope"></span></button>
    <span id="spC" class="glyphicon glyphicon-comment"></span>
      <button type="submit" name="quitter">      <span  id="sp1" class="glyphicon glyphicon-off"></span></button>  </form>  </div>
        <img id="green" src="img/green.JPG">

    </div>
        <div id="dvL"> <h4>Mes services <strong> OMNITECH </strong> </h4>
       <p>       <a href="emploi.php">    <span class="glyphicon glyphicon-time"></span> mon horaire  </a></p>
       <p>       <a href="payer.php"> <span class="glyphicon glyphicon-credit-card"></span>   centre de paiement </a></p>
       <p>        <a href="prof.php"><span class="glyphicon glyphicon-user"></span> Mes profs </a> </p>
       <p> <a href="grille.php"> <span class="glyphicon glyphicon-stats"></span> Grille de cheminement</a></p>
       <p> <span class="glyphicon glyphicon-save-file"></span> Sondage et votes </p>
       <p> <a href="messagerie.php">         <span class="glyphicon glyphicon-paste"></span> documents et messages</a> </p>
       <p> <a href="personal.php">        <span class="glyphicon glyphicon-briefcase"></span>  Dossier personnel</a></p> 
       <p>       <span class="glyphicon glyphicon-shopping-cart"></span> Covoiturage</p>
       <p><span class="glyphicon glyphicon-headphones"></span>  Assitance virtuel </p>


    </div>    
        <div id="dvC">
        <h1 id="hP">Actualités</h1> 
            <hr >
       <div id="job"> <img src="img/job.jpg"><p>offre d'emploi / stage DEC informatique </div>

</div>
<div id="job1"> <img src="img/soc.jpg"><p>Association des étudiants:photos de la cabane à sucre.</div>
</div>
       
<div id="job2"> <img src="img/bour.jpg"><p>2 actions sous-évaluées après le Crash boursier!</div>
</div>
        <?php 
        
            
         
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
            
            <h1 id="hP">Évènements</h1> 
            <hr >
            <table id="tC"  >
                <tr><td id="nP" colspan="7"> <p> Janvier 2022                <span class="glyphicon glyphicon-resize-horizontal"></span>
</p></td></tr>
                <tr> <td id="ans">11/31</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td> </tr>
                <tr> <td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td> </tr>
                <tr> <td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td> </tr>
                <tr> <td>21</td><td>22</td><td>23</td><td>24</td><td>25</td><td>26</td><td>27</td> </tr>
                <tr> <td>28</td><td>29</td><td id="vip">30</td><td id="ans">1</td><td id="ans">2</td><td id="ans">3</td><td id="ans">4</td> </tr>
            </table>
 
          <div id="evenr">  <span class="glyphicon glyphicon-calendar"> <p>Aucun évènement n'est défini pour cette période.</p></div>
        

            </div>
            <div id="dvR"> 
            <h2> Quoi de neuf ? </h2>
             <div id="sol"> <div><a href="payer.php"> <span class="glyphicon glyphicon-list-alt"></span> </div>    <?php
            $Total = "SELECT SUM(prix)  from paiement WHERE nom='".$_SESSION["nom"]."' AND NoDA = '". $_SESSION["NoDA"]."'"; 
             $sql3 = mysqli_query($con, $Total);
               while ( $tab = mysqli_fetch_array($sql3)){ 
               $total = $tab[0]; ?>
             <p > <strong> Solde à payer  de    <?php echo $tab[0] ?> $    </strong></p> <?php    
               } ?> 
               
            </a> 
            </div>
            <div id="sol2"> <div><a href="messagerie.php"> <span class="glyphicon glyphicon-envelope"></span> </div>    <?php
            $Total = "SELECT COUNT(message)  from messagerie WHERE destinataire='".$_SESSION["nom"]."'"; 
             $sql3 = mysqli_query($con, $Total);
               while ( $tab = mysqli_fetch_array($sql3)){ 
               $total = $tab[0]; ?>
             <p > <strong> <?php echo $tab[0] ?> Nouveaux messages    </strong></p> <?php    
               } ?> 
               
            </a>
            </div>
            </div>




</script>
    </body>
</html>
