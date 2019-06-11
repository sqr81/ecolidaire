<?php
require_once __DIR__ . "/model/database.php";

$search = $_GET["search"];
$category_id = $_GET["category_id"];

$projects = searchProjects($search, $category_id);

require_once __DIR__ . "/layout/header.php";
?>

    <section class="container">

        <h1>Résultats de la recherche :</h1>

    </section>


<?php require_once __DIR__ . "/layout/footer.php"; ?>