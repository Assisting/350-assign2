<?php
    $db = new PDO("sqlsrv:server = tcp:cc7lcgxcot.database.windows.net,1433; Database = cmpt350_ejl389", "ejl389", "GitHubSafe1");

    $insertStatement = $db->prepare("DELETE FROM AddressBook WHERE id=?");
    $insertStatement->bindParam(1, $idToRemove);

    $idToRemove = $_POST["id"]);
    
    $insertStatement->execute();
?>