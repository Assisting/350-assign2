<?php
    $db = new PDO('mysql:University Hostname;dbname=University Database;charset=utf8','University Username','University Password');
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
