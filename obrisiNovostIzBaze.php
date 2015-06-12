<?php 
  
  session_start();
  $userID = $_POST['userID'];

    $veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
    $veza->exec("set names utf8");
    $a = $veza->query("DELETE FROM komentar where idvijesti='".$userID."'");      
    echo $userID;
    $rezultat = $veza->query("DELETE FROM novosti where id='".$userID."' ");
    echo "Novost uspješno obrisana";
    echo "<br><br>
          <form>
            <input type = 'button' class = 'logButton' value = 'Vrati se na pocetnu!' onclick = 'vratiSe();'>
          </form>";
?>