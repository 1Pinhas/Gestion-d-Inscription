<?php
   $demande = [
      ["numero" => random_int(0,1000),
         "date" => "d/m/Y H:i",
         "Etat" => "Encours",
         "Type" => "Suspension",
         "motif" => " Demande de participation pour assistance a l enterrement du frere, du pere, d'un familier ",
         "etudiant" => [
            "nom"=>"Baila",
            "prenom"=>"Wane",
            "matricule"=>"001",
            "dateNaissance" => "2024-01-08",
            "classe" => [
               "filiere"=> "GLRSA", 
               "niveau"=> "Licence 2", 
               "code"=> "2"
            ]
         ]
      ],
      
      ["numero" => random_int(0,1000),
         "date" => "d/m/Y H:i",
         "Etat" => "Accpeter",
         "Type" => "Annulation",
         "motif" => " Demande de participation pour assistance a l enterrement du frere, du pere, d'un familier ",
         "etudiant" => [
            "nom"=>"Aly",
            "prenom"=>"Niang",
            "matricule"=>"001",
            "dateNaissance" => "2020-001-01",
            "classe" => [
               "filiere"=> "GLRSB", 
               "niveau"=> "Licence 2", 
               "code"=> "1"
            ]
         ]
      ],

      ["numero" => random_int(0,1000),
         "date" => "d/m/Y H:i",
         "Etat" => "Encours",
         "Type" => "Suspension",
         "motif" => " Demande de participation pour assistance a l enterrement du frere, du pere, d'un familier ",
         "etudiant" => [
            "nom"=>"Baila",
            "prenom"=>"Wane",
            "matricule"=>"001",
            "dateNaissance" => "2024-01-08",
            "classe" => [
               "filiere"=> "GLRSA", 
               "niveau"=> "Licence 2", 
               "code"=> null
            ]
         ]
      ],

      ["numero" => random_int(0,1000),
         "date" => "d/m/Y H:i",
         "Etat" => "Encours",
         "Type" => "Suspension",
         "motif" => " Demande de participation pour assistance a l enterrement du frere, du pere, d'un familier ",
         "etudiant" => [
            "nom"=>"Baila",
            "prenom"=>"Wane",
            "matricule"=>"001",
            "dateNaissance" => "2024-01-08",
            "classe" => [
               "filiere"=> "GLRSA", 
               "niveau"=> "Licence 2", 
               "code"=> null
            ]
         ]
      ],

      ["numero" => random_int(0,1000),
         "date" => "d/m/Y H:i",
         "Etat" => "Encours",
         "Type" => "Suspension",
         "motif" => " Demande de participation pour assistance a l enterrement du frere, du pere, d'un familier ",
         "etudiant" => [
            "nom"=>"Baila",
            "prenom"=>"Wane",
            "matricule"=>"001",
            "dateNaissance" => "2024-01-08",
            "classe" => [
               "filiere"=> "GLRSA", 
               "niveau"=> "Licence 2", 
               "code"=> null
            ]
         ]
      ]

   ];

function getAllEtudiants(): array{
   return [
      [
         "id"=> 1,
         "matricule"=>"MAT001",
         "nom"=>"ADAMA",
         "prenom"=>"cheikh",
         "login"=>"etudiant@gmail.com",
         "password"=>"passer123",
         "classe_id"=>2
      ],
      [
         "id"=> 2,
         "matricule"=>"MAT002",
         "nom"=>"amouda",
         "prenom"=>"dDiop",
         "login"=>"etudiant1@gmail.com",
         "password"=>"passer123",

         "classe_id"=>2
      ],
   ];
}

function getallClasse(): array{
   return [
      [
         "id" => 1,
         "nom" => "L2GLRSA",
         "filiere" => "GLRS",
         "niveau" => "L2",
         "code" => "A"
      ],
      [
         "id" => 2,
         "nom" => "L2GLRSA",
         "filiere" => "ETSE",
         "niveau" => "L2",
         "code" => "A"
      ]
   ];
}

function getAllAnnees():array{
   return [

      [
         "id" => 1,
         "nom" =>"2023-2024",
         "etat" => 1
      ],

      [
         "id" => 2,
         "nom" =>"2022-2023",
         "etat" => 0
      ]
   ];
}

function getAllDemande():array{
   return fromJsonToArray("demandes");
}

function connexion(string $login, string $password) : array|null {
   $etudiants=getAllEtudiants();
   foreach ($etudiants as $value) {
      if ($value['login'] == $login && $value['password'] == $password) {
         return $value;
      }
   }
   return null;
}

function getAnneeEncours(): array|null{
   $annees=getAllAnnees();
   foreach ($annees as $value) {
      if ($value['etat']==1) {
         return $value;
      }
   }
   return null;
}

function getDemandeByEtudiantAndAnneeEncours(int $etudiantId, int $anneeId, $etat="All"):array|null{
   $demandes=getAllDemande();
   $demandeEtu=[];
   foreach ($demandes as $value) {
      if ($etat=="All") {
         if ($value['etudiant_id']==$etudiantId && $value['annee_id']== $anneeId) {
            $demandeEtu[]= $value;
         }
      }else {
         if ($value['etudiant_id']==$etudiantId && $value['annee_id']== $anneeId && $value['etat']== $etat) {
            $demandeEtu[]= $value;
         }
      }
         
   }
   return $demandeEtu;
}

function addDemande(array $demande): void{
   fromArrayToJson("demandes",  $demande);
}


?>