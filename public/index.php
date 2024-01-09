<?php
define("WEBROOT","http://localhost:9000/");
define("DB","../bd/ges_inscription.json");
require_once("../bd/convert.php");

require_once("../repositories/demande.repository.php");
    $etudiantConnect=connexion("etudiant@gmail.com","passer123");
    $anneeEncours=getAnneeEncours();

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
if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]=="add") {
        require_once("../views/add.demande.html.php");
    }elseif ($_REQUEST["action"]=="liste") {
        $demandes=getDemandeByEtudiantAndAnneeEncours(1, $anneeEncours['id']);
        require_once("../views/liste.demande.html.php");
    }elseif ($_REQUEST["action"]=="form-filtre-demande") {
            $etat=$_REQUEST["etat"];
            $demandes=getDemandeByEtudiantAndAnneeEncours(1, $anneeEncours['id'], $etat);
            require_once("../views/liste.demande.html.php");
        }

        elseif ($_REQUEST["action"]=="form-add-demande") {
           $newDemande=[
                "id" => 4,
                "type" =>$_REQUEST["type"],
                "date"=>"01/01/2023",
                "motif" => $_REQUEST["motif"],
                "etudiant_id" => $etudiantConnect["id"],
                "annee_id" => $anneeEncours["id"],
                "etat" => "Encours"
           ];
           addDemande($newDemande);
           $demandes=getDemandeByEtudiantAndAnneeEncours(1, $anneeEncours['id']);
            require_once("../views/liste.demande.html.php");
        }
    }
    else {
        $demandes=getDemandeByEtudiantAndAnneeEncours(1, $anneeEncours['id']);
        require_once("../views/liste.demande.html.php");
    }
require_once("../views/partial/partie_commune2.html.php");


?>


</body>
</html>