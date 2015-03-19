<?php
    $db = new PDO('mysql:host=lovett.usask.ca;dbname=cmpt350_ejl389;charset=utf8','cmpt350_ejl389','k9xctrbvyt');
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