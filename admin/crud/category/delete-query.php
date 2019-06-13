<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../model/database.php";

// Récupérer l'id de la ligne à supprimer
$id = $_POST["id"];

// Supprimer la ligne en base de données
deleteCategory($id);

// Rediriger l'utilisateur
header("Location: index.php");