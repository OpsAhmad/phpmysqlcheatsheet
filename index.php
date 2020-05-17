<?php

//***********************CONNECTION******************** */
// PDO
/*
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'testphpcrud';
$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
*/

//PROCEDURAL
//$db = mysqli_connect('localhost', 'root', '', 'testphpcrud');

//Object Oriented
//$db = new mysqli('localhost', 'root', '', 'testphpcrud');
//************************READ***************************************
//PDO
/*
$stmt = $db->prepare("SELECT `id`,`nama`,`nis` FROM users WHERE id = 1");
$stmt->execute();
if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $result['nama'];
}

//PDO Loop
$stmt = $db->prepare("SELECT `id`,`nama`,`nis` FROM users WHERE id = 1");
$stmt->execute();
$stmt = $stmt->fetchAll();
foreach($stmt as $result){
    $result[‘nama’];
}

*/

//procedural
/*
if ($db) {

    $sql = mysqli_query($db, "SELECT id , nama , nis FROM users WHERE id = 1");
    $result = mysqli_fetch_assoc($sql);
    echo $result['nama'];
}

*/

//Procedural loop
/*
$sql = mysqli_query($db, "SELECT id , nama , nis FROM users ");
while ($row = $result = mysqli_fetch_assoc($sql)) {
    echo $row['nama'];
    echo '<br>';
}
*/

//Object Oriented
/*
$sql = $db->query("SELECT id , nama , nis FROM users WHERE id = 1");
$row = $sql->fetch_assoc();
echo $row['id'] . "<br>" . $row['nama'] . "<br>" . $row['nis']; 
*/

//Object Oriented Loop
/*
$sql = $db->query("SELECT id , nama , nis FROM users");
while ($row = $sql->fetch_assoc()) {
    echo $row['nama'];
    echo "<br>";
}
*/
//****************************CREATE*********************************
//PDO
/*
$sql = "INSERT INTO `users` (`nama`,`nis`) VALUES ('Rudi',3333)";
$db->exec($sql);
*/

//procedural
/*
$sql = mysqli_query($db, "INSERT INTO `users` (`nama`,`nis`) VALUES ('Rudi',3333)");
*/

//Object Oriented
//$db->query("INSERT INTO `users` (`nama`,`nis`) VALUES ('Ilham',9999)");

//****************************UPDATE*********************************
//PDO
/*
$sql = "UPDATE `users` SET `nama`='alendra56' , `nis` = 777 WHERE id = 1";
$db->exec($sql);
*/

//procedural
/*
$sql = mysqli_query($db, "UPDATE `users` SET `nama`='alendra56' , `nis` = 777 WHERE id = 1");
*/

//Object Oriented
//$db->query("UPDATE `users` SET `nama`='Fitri' , `nis` = 888 WHERE id = 3");
//****************************DELETE*********************************
//PDO
/*
$sql = "DELETE FROM `users` WHERE 0";
$db->exec($sql);
*/

//procedural
/*
$sql = mysqli_query($db, "DELETE FROM `users` WHERE 0");
*/

//Object Oriented  
//$db->query("DELETE FROM `users` WHERE 0"); 
//***************************CLOSE CONNECTION**************** */

//mysqli_close($db);//PDO

//$db = null; //PROCEDURAL

//$db->close(); //Object Oriented
