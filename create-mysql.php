<?php
    $db = new PDO('mysql:host=lovett.usask.ca;dbname=cmpt350_ejl389;charset=utf8','cmpt350_ejl389','k9xctrbvyt');

    function clean($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstName = clean($_POST["firstName"]);
    $lastName = clean($_POST["lastName"]);
    $email = clean($_POST["email"]);
    $phone = clean($_POST["phone"]);
    $github = clean($_POST["github"]);
    $city = clean($_POST["city"]);
    $region = clean($_POST["region"]);
    $country = clean($_POST["country"]);
    $occupation = clean($_POST["occupation"]);

    $insertStatement = "INSERT INTO AddressBook (FirstName, LastName, Email, Phone, GitHub, City, Region, Country, Occupation)
                                    VALUES (";
    $insertStatement .= $firstName;
    $insertStatement .= ", ";
    $insertStatement .= $lastName;
    $insertStatement .= ", ";
    $insertStatement .= $email;
    $insertStatement .= ", ";
    $insertStatement .= $phone;
    $insertStatement .= ", ";
    $insertStatement .= $github;
    $insertStatement .= ", ";
    $insertStatement .= $city;
    $insertStatement .= ", ";
    $insertStatement .= $region;
    $insertStatement .= ", ";
    $insertStatement .= $country;
    $insertStatement .= ", ";
    $insertStatement .= $occupation;
    $insertStatement .= ")";
    
    $db->query($insertStatement);
?>