<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une 
chaîne decaractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<?php

$texte = "Mon texte en paramètre";

function convertirMajRouge($texte){
    if ($texte = mb_strtoupper($texte)) {
        echo "<p style=color:red> $texte </p>";
    }
     // return $texte;
}

//ou sans if

// function convertirMajRouge($texte){
//    $texte = mb_strtoupper($texte);
// echo "<p style=color:red> $texte </p>";

// }

convertirMajRouge($texte);

?>

<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le 
nom du pays s’affichera en majuscule et que le tableau est trié par ordre
alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

ksort($capitales);

function afficherTableHTML($capitales){
    // echo "<tr>";
    // echo "<th> Pays </th><th> Capitales </th>";
    echo "<table border = 1>
            <tr>
                <th> Pays </th>
                <th> Capitales </th>
            </tr>";
    foreach ($capitales as $pays => $capitale) {
        $pays = strtoupper($pays); //ou mettre mb_strtoupper directement dans la key dans le echo
        echo "<tr>
                <td> $pays </td>
                <td> $capitale </td>
            </tr>";
}
    echo "</table>";
}
afficherTableHTML($capitales);


// another better solution 

// ksort($capitales);
// function afficherTableHTML($array)
// {
//     echo "<table border=1>
//         <th>Pays </th>
//         <th>Capitale </th>";
//     foreach($array as $k => $v)
//     {
//         echo "<tr>
//             <td>". strtoupper($k)."</td>
//             <td>". $v."</td>
//             </tr>";
//     }
//         echo "</table>";
// }
// afficherTableHTML($capitales);

?>



<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation.
     Le lien devra s’ouvrir dans un nouvel onglet (_blank)</p>

<?php


$lien = "https://elan-formation.eu/accueil";

echo "<a href = $lien  target = \"_blank\" > $lien </a>";  //ask why the slash in between _blank


?>


<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le 
    tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de 
    la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet 
    et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
    https://fr.wikipedia.org/wiki/
    Le tableau passé en argument sera le suivant :
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<?php


$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];



function afficherTable($capitales){

$lien = "https://fr.wikipedia.org/wiki/";

asort($capitales);

echo "<table border = 1>
        <tr> 
            <th> Pays </th>
            <th> Capitale </th>
            <th> Lien wiki </th>
        </tr>";
foreach ($capitales as $pays => $capitale) {
    $pays = strtoupper($pays);
    echo "<tr>
            <td> $pays </td>
            <td> $capitale </td>
            <td> <a target = \"_blank\" href = $lien  > Lien </a></td>
        </tr>";
}

    echo "</table>";

}

afficherTable($capitales);

?>


<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire 
    de champs de texte en précisant le nom des champs associés.
    Exemple :
    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput); </p>

<?php


$nomInput = array("Nom", "Prénom", "Ville");

function afficherInput($nomInput){

    foreach ($nomInput as $value) {
        echo "<p style = 'margin-bottom:-15px' >$value</p> <br> ";
        echo "<input type = \"text\" name = 'pseudo'  /> <br>";
       
    } 
        


}

afficherInput($nomInput);

//this one is ok too
 // echo '<label>'.$value.' : </label><input type="text" name="'.strtolower($value).'"><br>';

 ?>



<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste 
    déroulante à partir d'un tableau de valeurs.
    Exemple :
    $elements = array("Monsieur","Madame","Mademoiselle");
    alimenterListeDeroulante($elements); </p>

<?php

$elements = array("Monsieur", "Madame", "Mademoiselle");

function alimenterListeDeroulante($elements){

        echo "<select name = 'choix'>";
        // echo "<option value ''> Choix </option>"; if you want something written in your case before choosing 
    foreach ($elements as $choix) {
        echo "<option value '$choix'> $choix </option>";        
    }
        echo "</select>";
}

alimenterListeDeroulante($elements);

?>



<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des 
    cases à cocher. On pourra préciser dans le tableau associatif 
    si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
    </p>

<?php

//how to check a specific box ask

    $elements = [
        "Choix 1" => "Non cochée",
        "Choix 2" => "Cochée",
        "Choix 3" => "Non cochée"
    ];

    function genererCheckbox($elements){
        foreach ($elements as $choix => $case) {
            echo "<input type = 'checkbox' name = '$case'/>
            <label for = '$case'> $choix </labe> <br>";

        }

        }

    genererCheckbox($elements);

?>



<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N 
fois à l’écran.
Exemple :
repeterImage($url,4);
   </p>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$repetition = 4;

function repeterImage($url, $repetition) {
    for ($i=1; $i <= 4; $i++) { 
        echo "<img src = '$url' alt = dog height = '150px' width = '140px'>";
    }
}

repeterImage($url, 4);

?>



<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio
 avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<?php

//how to check a specific radio button ask

$nomRadio = array ("Monsieur", "Madame", "Mademoiselle");

function afficherRadio($nomRadio){
    foreach ($nomRadio as $nom) {
        echo "<input type = radio name = $nom value = $nom />
        <label for = $nom> $nom </label><br>";
    }
}

afficherRadio($nomRadio)

?>


<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer
     un formulaire complet qui contient les informations suivantes : champs de 
     texte avec nom, prénom, adresse email, ville, sexe et une liste de choix 
     parmi lesquels on pourra sélectionner un intitulé de formation :
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
    de validation (submit).</p>

<?php

$information = array ("Nom", "Prénom", "Adresse email", "Ville", "Sexe");
$formations = array ("Développeur Logiciel", "Designer Web", "Intégrateur",
                    "Chef de Projet");

function afficherInformation($information){

    foreach ($information as $value) {
        echo "<p style = 'margin-bottom:-15px' >$value</p> <br> ";
        echo "<input type = \"text\" name = 'pseudo'  /> <br>";
       
    } 
}

afficherInformation($information) ;

echo "<br>";

function listeDeroulanteFormation($formations){
    echo "<label> Intitulé de formation </label> <br>";
    echo "<select style = 'margin-top : 15px' name = 'choix'>";
    echo "<option value ''> Formations </option>";  //if you want something written in your case before choosing 
foreach ($formations as $choix) {
    echo "<option value '$choix'> $choix </option>";        
}
    echo "</select>";
}

listeDeroulanteFormation($formations);

echo "<br>";

echo "<input style = 'margin-top: 25px; padding: 7px;' type = submit name = submit> </input>";

?>


<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français 
    (en toutes lettres) à partir d’une chaîne de caractère représentant
     une date.
    Exemple :
    formaterDateFr("2018-02-23");</p>

<?php

$date = ("2018-02-23");

function formaterDateFr($date){
    
    $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL,
    IntlDateFormatter::NONE);
    $time = strtotime($date);  //change value of the string to be a type time
    echo $dateFormat -> format($time);  //define the french format for the date $time

}

formaterDateFr("2018-02-23"); // ou formaterDateFr($date)

?>


<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations 
    d’une variable. Soit le tableau suivant :
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
    A l’aide d’une boucle, afficher les informations des variables contenues 
    dans le tableau.</p>

<?php

$tableauValeurs = array (true, "texte", 10, 25.369, 
                array ("valeur1","valeur2"));

    foreach ($tableauValeurs as $value) {
        echo var_dump($value) ;
        echo "<br>";
    }

?>


<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : 
    marque, modèle, nbPortes et vitesseActuelle ainsi que les 
    méthodes demarrer( ), accelerer( ) et stopper( ) en plus des 
    accesseurs (get) et mutateurs (set) traditionnels. La vitesse 
    initiale de chaque véhicule instancié est de 0. Une méthode 
    personnalisée pourra afficher toutes les informations d’un
    véhicule.
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l’ensemble des méthodes, accesseurs et mutateurs de la 
    classe tout en réalisant des jeux de tests pour vérifier 
    la cohérence de la classe Voiture.</p>

<?php

class Voiture{
    //attributs
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    // private $_vitesseInitiale = 0;


    public function __construct($marque, $modele, $nbPortes){
        $this -> _marque = $marque;
        $this -> _modele = $modele;
        $this -> _nbPortes = $nbPortes;
        $this -> _vitesseActuelle = 0;
    }

    //methodes

    public function getMarque(){
        return $this -> _marque;
    }
    public function setMarque($marque){
        $this -> _marque = $marque;
    }
    public function getModele(){
        return $this -> _modele;
    }
    public function setModele($modele){
        $this -> _modele = $modele;
    }
    public function getNbPortes(){
        return $this -> _nbPortes;
    }
    public function setNbPortes($nbPortes){
        $this -> _nbPortes = $nbPortes;
    }
    public function getVitesseActuelle(){
        return $this -> _vitesseActuelle;
    }
    public function setVitesseActuelle($vitesseActuelle){
        $this -> _vitesseActuelle = $vitesseActuelle;
    }

    
    public function demarrer(){
        echo "Le véhicule {$this -> _marque} {$this -> _modele} 
        démarre <br>";

    }


    public function accelerer($vitesseAcceleration){
        $this -> _vitesseActuelle += $vitesseAcceleration;
        echo "Le véhicule {$this -> _marque} {$this -> _modele} 
        accélère de {$vitesseAcceleration} km/h <br>";
       


    }

    
    public function stopper(){
        if ($this ->_vitesseActuelle){
            $this -> _vitesseActuelle = 0;
        } echo "Le véhicule {$this -> _marque} {$this ->_modele}
        est stoppé <br>";
    }

    public function ralentir($vitesse){
        echo "La vitesse du véhicule {$this -> _marque} 
        {$this -> _modele} est de : {$vitesse} km / h <br>";
    }





    public function information(){
        echo "Infos véhicule  {$this -> getMarque()}
        {$this -> getModele()} <br> 
        *************** <br>
        Nom et modèle du véhicule: {$this -> getMarque()} {$this -> getModele()} <br>
        Nombre de portes: {$this -> getNbPortes()} <br>";

        if ($this -> _vitesseActuelle == 0){
            echo "Le véhicule {$this -> getMarque()} est à l'arrêt <br>";
            echo " Sa vitesse actuelle est de : {$this -> getVitesseActuelle()} km / h <br>";
        } else {
            echo "Le véhicule {$this -> getMarque()} est démarré <br>";
            echo "Sa vitesse actuelle est de : {$this -> getVitesseActuelle()} km / h <br>";
        }
    }

    public function getInformation(){
        return $this -> information();
    }
}

$v1 = new Voiture ("Peugeot", "408", 5);
$v2 = new Voiture ("Citroën", "C4", 3);

$v1 -> demarrer();
$v1 -> accelerer(50);
$v2 -> demarrer();
$v2 -> stopper();
$v2 -> accelerer(20); 
$v2 -> demarrer();
$v1 -> ralentir(50);
$v2 -> ralentir(0);

echo "<br>";

echo $v1 -> getInformation();
echo $v2 -> getInformation(); //ask why it shows 20 instead of 0 km/h





// if ($this -> _marque === "Peugeot") {
//   echo "Le véhicule veut accélérer de {$this -> _vitesseActuelle} km/h <br>";
// } 

?>



<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php,
     vérifier si une adresse e-mail a le bon format.

L’adresse contact@elan est une adresse e-mail invalide</p>

<?php

$adresseMail = ("elan@elan-formation.fr");

// FILTER_VALIDATE_EMAIL  pour valider l'adresse e-mail
//filter_var() renvoie les données filtrées en cas de succès ou FALSE en cas d'échec

if (filter_var ($adresseMail, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse $adresseMail est une adresse e-mail valide";
} else {
    echo "L'adresse e-mail n'est pas valide";
}

?>