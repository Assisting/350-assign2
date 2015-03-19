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
        
        print $data;
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

    $firstName = clean($_POST["firstName"]);
    $lastName = clean($_POST["lastName"]);
    $email = clean($_POST["email"]);
    $phone = clean($_POST["phone"]);
    $github = clean($_POST["github"]);
    $city = clean($_POST["city"]);
    $region = clean($_POST["region"]);
    $country = clean($_POST["country"]);
    $occupation = clean($_POST["occupation"]);
    
    $insertStatement->execute();
?>