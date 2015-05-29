<?php 
  
  session_start();
  $username = htmlentities($_POST['username'], ENT_QUOTES);
  $password = htmlentities($_POST['password'], ENT_QUOTES);

    $veza = new PDO("mysql:dbname=wts;host=localhost;charset=utf8", "wtadmin", "wtadmin");
    $veza->exec("set names utf8");

    $svi = $veza->prepare("SELECT count(*) from korisnik where username=?");
    $svi->execute(array($username));
    $imaLi = $svi->fetchColumn();

    if($imaLi != 0)
    {
      echo "Već postoji taj korisnik!";
    }
    else if($username == "" || $username == null || $password == "" || $password == null)
    {
      echo "Morate unijeti vrijednosti !!";
    }
    else{
    $rezultat = $veza->query("INSERT INTO korisnik (username, password) VALUES ('".htmlspecialchars($username, ENT_QUOTES)."', '".htmlspecialchars($password, ENT_QUOTES)."')");
    echo "Korsnik  : " . $username. " uspješno dodan";}
    echo "<br><br>
          <form>
            <input type = 'button' class = 'logButton' value = 'Vrati se na pocetnu!' onclick = 'vratiSe();'>
          </form>";
?>