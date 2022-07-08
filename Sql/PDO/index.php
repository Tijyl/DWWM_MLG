<?php
//$pdo = new PDO("mysql:host=localhost;dbname=clients","root","")
try{
    $db = new PDO("mysql:host=localhost;dbname=clients","root","");
    echo "ça marche gg ";
}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
// methode prepare
// $sql = "INSERT INTO client (identifiant,nom,prenom,ville) VALUES (?,?,?,?)";

// //methode execute
// $query = $db->prepare($sql);
// $query -> execute(array(7,"toto","titi","Bordeaux"));

//modification 
// $req =  $pdo->prepare("UPDATE client set ville=? where identifiant=?");
// $rep->execute(array("BX",7));

//Suppression
$req = $pdo->prepare("DELETE FROM client where identifiant=?");
$req->execute(array(7));

?>