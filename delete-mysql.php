<?php
    $db = new PDO('mysql:University Hostname;dbname=University Database;charset=utf8','University Username','University Password');

    $insertStatement = $db->prepare("DELETE FROM AddressBook WHERE id=?");
    $insertStatement->bindParam(1, $idToRemove);

    $idToRemove = intval($_POST["id"]);
    
    $insertStatement->execute();
?>
