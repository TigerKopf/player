<?php
$servername = "DeinServerName";
$username = "DeinBenutzername";
$password = "DeinPasswort";
$dbname = "DeineDatenbankName";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$author = $_POST['author'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$birthday = $_POST['birthday'];
$street = $_POST['street'];
$postal_code = $_POST['postal_code'];
$city = $_POST['city'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$kindergartengruppe = $_POST['kindergartengruppe'];
$favorite_color = $_POST['favorite_color'];
$favorite_animal = $_POST['favorite_animal'];
$favorite_food = $_POST['favorite_food'];
$favorite_dessert = $_POST['favorite_dessert'];
$favorite_music = $_POST['favorite_music'];
$favorite_song = $_POST['favorite_song'];
$favorite_game = $_POST['favorite_game'];
$love = $_POST['love'];
$not_love = $_POST['not_love'];
$wish = $_POST['wish'];

$sql = "INSERT INTO persons (author, name, nickname, birthday, street, postal_code, city, tel, email, kindergartengroup, favorite_color, favorite_animal, favorite_food, favorite_dessert, favorite_music, favorite_song, favorite_game, love, notlove, wish) VALUES ('$name', '$author', '$name', '$nickname', '$birthday', '$street', '$postal_code', '$city', '$tel', '$email', '$kindergartengruppe', '$favorite_color', '$favorite_animal', '$favorite_food', '$favorite_dessert', '$favorite_music', '$favorite_song', '$favorite_game', '$love', '$not_love', '$wish')";

if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich eingefügt";
} else {
    echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

$conn->close();
?>
