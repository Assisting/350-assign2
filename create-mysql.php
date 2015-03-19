<?php
    $db = new PDO('mysql:host=lovett.usask.ca;dbname=cmpt350_ejl389;charset=utf8','cmpt350_ejl389','k9xctrbvyt');

    function clean($data) {
        if(empty($data)) {
            $data = "";
        }
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $insertStatement = $db->prepare("INSERT INTO AddressBook (FirstName, LastName, Email, Phone, GitHub, City, Region, Country, Occupation)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $insertStatement->bindParam(1, $firstName);
    $insertStatement->bindParam(2, $lastName);
    $insertStatement->bindParam(3, $email);
    $insertStatement->bindParam(4, $phone);
    $insertStatement->bindParam(5, $github);
    $insertStatement->bindParam(6, $city);
    $insertStatement->bindParam(7, $region);
    $insertStatement->bindParam(8, $country);
    $insertStatement->bindParam(9, $occupation);

    $firstName = clean($_GET["firstName"]);
    $lastName = clean($_GET["lastName"]);
    $email = clean($_GET["email"]);
    $phone = clean($_GET["phone"]);
    $github = clean($_GET["github"]);
    $city = clean($_GET["city"]);
    $region = clean($_GET["region"]);
    $country = clean($_GET["country"]);
    $occupation = clean($_GET["occupation"]);
    
    $insertStatement->execute();
?>