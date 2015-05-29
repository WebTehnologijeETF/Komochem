<?php 
  
  session_start();
  $userID = $_POST['userID'];

    $veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
    $veza->exec("set names utf8");
    $rezultat = $veza->query("DELETE FROM korisnik where id='".$userID."' ");
    echo "Korsnik uspješno obrisan";
    echo "<br><br>
          <form>
            <input type = 'button' class = 'logButton' value = 'Vrati se na pocetnu!' onclick = 'vratiSe();'>
          </form>";
?>