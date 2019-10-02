<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=cinema.sql', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}
if (isset($_GET['t']) AND !empty($_GET['t'])) {
  $reponse = $bdd->query("SELECT titre FROM film WHERE titre LIKE '%{$_GET['t']}%' ORDER BY id_film");
}
//echo "<pre>" . print_r($_GET) . "</pre>";
$genre = $bdd->query("SELECT nom FROM genre");
if (isset($_GET['genre']) AND !empty($_GET['genre'])) {
  $id_genre = $bdd->query("SELECT titre
  FROM film
  INNER JOIN genre ON film.id_genre = genre.id_genre
  WHERE genre.nom LIKE '%{$_GET['genre']}%'");
}

$distrib = $bdd->query("SELECT nom FROM distrib");
if (isset($_GET['distributeur']) AND !empty($_GET['distributeur'])) {
  $validation_distrib = $bdd->query("SELECT titre
    FROM film
    INNER JOIN distrib ON film.id_distrib = distrib.id_distrib
    WHERE distrib.nom LIKE '%{$_GET['distributeur']}%'");
}
if (isset($_GET['N']) AND !empty($_GET['N'])) {
  $nom = $bdd->query("SELECT nom, prenom, id_perso FROM fiche_personne WHERE nom LIKE '%{$_GET['N']}%' OR prenom LIKE '%{$_GET['N']}%'");

}
//echo "<pre>" . print_r($_GET) . "</pre>";

$abonnement = $bdd->query("SELECT nom FROM abonnement");
if (isset($_GET['abonnement']) AND !empty($_GET['abonnement'])) {
  $id_abo = $bdd->query("SELECT id_abo
    FROM abonnement
    INNER JOIN membre ON id_membre.nom = abonnement.id_abo
    WHERE abonnement.id_abo LIKE '%{$_GET['abonnement']}%'");
}

?>
