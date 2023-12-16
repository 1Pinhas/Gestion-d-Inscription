<?php
define("WEBROOT","http://localhost:9000/");
require_once("../repositories/demande.repository.php");
    $etudiantConnect=connexion("etudiant@gmail.com","passer123");
    $anneeEncours=getAnneeEncours();
    $demandes=getDemandeByEtudiantAndAnneeEncours(1, $anneeEncours['id']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande</title>
    <link rel="stylesheet" href="<?=WEBROOT?>style.css">
    <link rel="stylesheet" href="<?=WEBROOT?>add.demande.css">
</head>
<body>  

<?php
require_once("../views/partial/partie_commune1.html.php");
if (isset($_GET["action"])) {
    if ( $_GET["action"]=="add") {
        require_once("../views/add.demande.html.php");
    }elseif ( $_GET["action"]=="liste") {
        require_once("../views/liste.demande.html.php");
    }
}
else {
    require_once("../views/liste.demande.html.php");
}
require_once("../views/partial/partie_commune2.html.php");

// require_once("../Views/partial/nav.html.php");
//     if (isset($_GET["action"])) {
//         if ($_GET["action"]=="add") {
//             require_once("../Views/add.html.php");
//         }elseif ($_GET["action"]=="liste") {
//             require_once("../Views/liste.html.php");
//         }
//     }
// else{
//         require_once("../Views/liste.html.php");
//     }

?>


</body>
</html>