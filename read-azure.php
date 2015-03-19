<?php
    $db = new PDO("sqlsrv:server = tcp:cc7lcgxcot.database.windows.net,1433; Database = cmpt350_ejl389", "ejl389", "GitHubSafe1");
    $results = array();

    foreach($db->query('SELECT * FROM AddressBook ORDER BY FirstName') as $row) {
        $results[] = array(
            'id' => $row['ID'],
            'firstName' => $row['FirstName'],
            'lastName' => $row['LastName'],
            'email' => $row['Email'],
            'phone' => $row['Phone'],
            'github' => $row['GitHub'],
            'city' => $row['City'],
            'region' => $row['Region'],
            'country' => $row['Country'],
            'occupation' => $row['Occupation']
        );
    }

    echo json_encode($results);
?>