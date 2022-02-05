<?php
session_start();
?>
<html>
    <head>
    </head>
    <body>
        <div align="center">
        <form method="post">  
<table> 
  <tr><td >Login</td><td><input type="text" name="login" value=""></td></tr>
  <tr><td >Password</td><td><input type="password" name="password" value=""></td></tr>
  <tr><td >Nom d'ecole</td><td><input type="text" name="nomecole" value=""></td></tr>

  <tr><td><input type="submit" value="login" name="client"></td>
  <td>  <button class="button2" onclick="self.location.href='activerCompte'">Activer Compte </botton></td>
</tr>

</table>
 </form> 
        </div> 
    </body>
</html>