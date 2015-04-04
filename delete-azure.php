<?php
    $db = new PDO("sqlsrv:server = tcp:My Azure Server,1433; Database = My Azure Database", "My Azure Username", "My Azure Password");

    $insertStatement = $db->prepare("DELETE FROM AddressBook WHERE id=?");
    $insertStatement->bindParam(1, $idToRemove);

    $idToRemove = intval($_POST["id"]);
    
    $insertStatement->execute();
?>
