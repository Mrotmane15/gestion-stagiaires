<?php
// code php for Add student to database
$db = App::resolve(Database::class);
if($SERVER['REQUEST_METHODE']== 'post') {
    // $id = isset($_POST['matricule'])? $_POST['matricule'] : "" ;AUTO INCREMENT
    $nom = isset($_POST['nom'])? $_POST['nom'] : "" ;
    $prenom = isset($_POST['prenom'])? $_POST['prenom'] : "" ;
    $filiere = isset($_POST['filiere'])? $_POST['filiere'] : "" ;
    $anneEtude= isset($_POST['annee_etude'])? $_POST['annee_etude'] : "" ;
    $TypeBac= isset($_POST['type_bac'])? $_POST['type_bac'] : "" ;
    $AnneBac= isset($_POST['annee_bac'])? $_POST['annee_bac'] : "" ;
    $InsertRqt = 'INSERT INTO stagiaires(nom, prenom, filiere, anne_etude, type_bac, annee_bac) VALUES(?, ?, ?, ?, ?, ?)';
    $db->query($InsertRqt, [':nom'=>$nom, ':prenom'=>$prenom, ':filiere'=>$filiere, ':annee_etude'=>$anneEtude, ':type_bac'=>$TypeBac, ':annee_bac'=>$AnneBac]);
}
// code php for modification info student
if($SERVER['REQUEST_METHODE']== 'post'){
    $id = isset($_POST['matricule'])? $_POST['matricule'] : "" ;
    $nom = isset($_POST['nom'])? $_POST['nom'] : "" ;
    $prenom = isset($_POST['prenom'])? $_POST['prenom'] : "" ;
    $filiere = isset($_POST['filiere'])? $_POST['filiere'] : "" ;
    $anneEtude= isset($_POST['annee_etude'])? $_POST['annee_etude'] : "" ;
    $TypeBac= isset($_POST['type_bac'])? $_POST['type_bac'] : "" ;
    $AnneBac= isset($_POST['annee_bac'])? $_POST['annee_bac'] : "" ;
    $UpdateRqt = 'UPDATE stagiaires set nom=?, prenom=?, filiere=?, annee_etude=?, type_bac=?, anne_bac=? WHERE matricule=?';     
    $db->query($UpdateRqt, [':nom'=>$nom, ':prenom'=>$prenom, ':filiere'=>$filiere, ':annee_etude'=>$anneEtude, ':type_bac'=>$TypeBac, ':annee_bac'=>$AnneBac, ':matricule'=>$id]);
}

