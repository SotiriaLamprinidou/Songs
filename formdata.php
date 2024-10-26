<?php
	// echo "<pre>";

	// print_r($_POST);
	// echo "</pre>";
	
$servername = "localhost";
$username = "root"; //ή όποιον χρήστη έχετε
$password = ""; // αλλάξτε το
$dbname = "formdatabase";
// Δημιουργία σύνδεσης
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Έλεγχος σύνδεσης
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


	$AlbumReleases = $_POST['AlbumReleases'];
	$AlbumName = $_POST['AlbumName'];
	$VisitorName = $_POST['VisitorName'];
	$Review = $_POST['Review'];
	$grade = $_POST['grade'];
	
//ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
mysqli_set_charset($conn, "utf8");
//Δημιουργία ερωτήματος
$sql = "INSERT INTO `f1`(`AlbumReleases`, `AlbumName`, `VisitorName`, `Review`, `grade` ) VALUES ('$AlbumReleases','$AlbumName','$VisitorName', '$Review', '$grade') ;";
//εκτέλεση ερωτήματος στη βάση
$result = mysqli_query($conn, $sql);
//έλεγχος αποτελεσμάτων
if ($result) {
//Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
echo "<br>αποθηκευση οκ<br>";
}
//κλείσιμο σύνδεσης
mysqli_close($conn);
?>