<?php
require_once 'app.php';

if (isset($_POST['register'])) {
    $birthday = new DateTime($_POST['birthday']);
    $interval = $birthday->diff(new DateTime('now'));
    if ($interval->y < 18) {
        throw new Exception("Underaged not allowed");
    }
    if ($_POST['password'] != $_POST['confirm']) {
        throw new Exception("Password mismatch");
    }
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $dataForDb = $_POST;
    unset($dataForDb['register']);
    unset($dataForDb['confirm']);

    $query = "INSERT INTO people (
   first_name,
   last_name,
   nickname,
   email,
   password,
   gender_id,
   born_on,
   country_id,
   city_id
) VALUES (
   ?,
   ?,
   ?,
   ?,
   ?,
   ?,
   ?,
   ?,
   ?,
);";
    $dataForDb = array_values($dataForDb);
    $stmt = $db->prepare($query);
    $result = "";
    if ($stmt->execute($dataForDb)) {
        $result = "Success";
    } else {
        $result = "Error :(";
    }
}
$stmt = $db->prepare("SELECT id, name FROM countries ORDER BY name");
$stmt->execute();
$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT id, name country_id FROM state ORDER BY name");
$stmt->execute();
$state = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT id, name, state_id FROM cities ORDER BY name");
$stmt->execute();
$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT id, name FROM genders ORDER BY name");
$stmt->execute();
$genders = $stmt->fetchAll(PDO::FETCH_ASSOC);


include 'register_frontend.php';