<?php
    $db = new PDO('mysql:host=lovett.usask.ca;dbname=cmpt350_ejl389;charset=utf8','cmpt350_ejl389','k9xctrbvyt');

    $insertStatement = $db->prepare("DELETE FROM AddressBook WHERE id=?");
    $insertStatement->bindParam(1, $idToRemove);

    $idToRemove = intval($_POST["id"]);
    
    $insertStatement->execute();
?>