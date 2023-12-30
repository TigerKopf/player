<?php
require __DIR__ . '/database.php';
require __DIR__ . '/utilities.php';

$conn = getDB();

$author = $_POST['author'] ?? null;
$name = $_POST['name'] ?? null;
$nickname = $_POST['nickname'] ?? null;
$birthday = $_POST['birthday'] ?? null;
$street = $_POST['street'] ?? null;
$postal_code = $_POST['postal_code'] ?? null;
$city = $_POST['city'] ?? null;
$tel = $_POST['tel'] ?? null;
$email = $_POST['email'] ?? null;
$kindergartengruppe = $_POST['kindergartengruppe'] ?? null;
$favorite_color = $_POST['favorite_color'] ?? null;
$favorite_animal = $_POST['favorite_animal'] ?? null;
$favorite_food = $_POST['favorite_food'] ?? null;
$favorite_dessert = $_POST['favorite_dessert'] ?? null;
$favorite_music = $_POST['favorite_music'] ?? null;
$favorite_song = $_POST['favorite_song'] ?? null;
$favorite_game = $_POST['favorite_game'] ?? null;
$love = $_POST['love'] ?? null;
$not_love = $_POST['not_love'] ?? null;
$wish = $_POST['wish'] ?? null;

$sql = "INSERT INTO persons (author, name, nickname, birthday, street, postal_code, city, tel, email, kindergartengroup, favorite_color, favorite_animal, favorite_food, favorite_dessert, favorite_music, favorite_song, favorite_game, love, notlove, wish) 
        VALUES ('$author', '$name', '$nickname', '$birthday', '$street', '$postal_code', '$city', '$tel', '$email', '$kindergartengruppe', '$favorite_color', '$favorite_animal', '$favorite_food', '$favorite_dessert', '$favorite_music', '$favorite_song', '$favorite_game', '$love', '$not_love', '$wish')";

if ($conn->query($sql) === TRUE) {
        header('Location: /');
    exit();
} else {
    echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

$conn = null;
?>
