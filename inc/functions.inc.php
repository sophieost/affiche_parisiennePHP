<!-- Fichier qui contient les fonctions php à utiliser dans notre site -->
<?php

session_start();

define("RACINE_SITE","/affiche_parisienne/"); // constante qui définit les dossiers dans lesquels se situe le site pour pouvoir déterminer des chemin absolus à partir de localhost (on ne prend pas locahost). Ainsi nous écrivons tous les chemins (exp : src, href) en absolus avec cette constante.


///////////////////////////// Fonction de débugage //////////////////////////

            function debug($var) {
                
                echo '<pre class="border border-dark bg-light text-primary w-50 p-3">';

                    var_dump($var);

                echo '</pre>';

            }


////////////////////// Fonction d'alert ////////////////////////////////////////

function alert(string $contenu, string $class)  {

    return "<div class='alert alert-$class alert-dismissible fade show text-center w-50 m-auto mb-5' role='alert'>
        $contenu

            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

        </div>";


}


///////////////////////////// Fonction de déconnexion/////////////////////////

function logOut(){

    if(isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'deconnexion' ){


        unset($_SESSION['user']);
         // On supprime l'indice "user " de la session pour se déconnecter // cette fonction détruit les variables  stocké  comme 'firstName' et 'email'.

        //session_destroy(); // Détruit toutes les données de la session déjà  établie . cette fonction détruit la session sur le serveur 

        header("location:".RACINE_SITE."index.php");
    }

}
// logOut();


///////////////////////////  Fonction de connexion à la BDD //////////////////////////

            /**
             * On va utiliser l'extension PHP Data Object (PDO), elle définit une excellente interface pour accèder à une base de données depuis PHP et d'éxécuter des requêtes SQL.
             * pour se connecter à la BDD avec PDO, il faut créer une instance de cette Class/Objet (PDO) qui représente une connexion à la BDD.
             */

             // On déclare des constantes d'environnement qui vont contenir les informations à la connexion à la BDD

                // Constante du serveur => localhost
                define("DBHOST", "localhost");

                // Constante de l'utilisateur de la BDD du serveur en local  => root
                define("DBUSER", "root");

                // Constante pour le mot de passe de serveur en local => pas de mot de passe
                define("DBPASS", "");

                // Constante pour le nom de la BDD
                define("DBNAME", "affiche_parisienne");


    function connexionBdd() {

        // Sans la variable $dsn et sans le constantes, on se connecte à la BDD :

            // $pdo = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', '');

        // avec la variable DSN (Data Source Name) et les constantes

            // $dsn = "mysql:host=localhost;dbname=cinema;charset=utf8";

            $dsn = "mysql:host=" .DBHOST.";dbname=".DBNAME.";charset=utf8";

            try {
                
                $pdo = new PDO($dsn, DBUSER, DBPASS);

                // On définit le mode d'erreur de PDO sur Exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
            }
            catch(PDOException $e) {

            die($e->getMessage());

            }

            return $pdo;

            
    }
    // connexionBdd();



    //////////////////// Fonctions du CRUD pour les utilisateurs Users /////////////////////

    function inscriptionUsers(string $pseudo, string $email, string $password, string $civility, string $firstName, string $lastName) 
    : void {

        $pdo = connexionBdd(); // je stock ma connexion  à la BDD dans une variable

        $sql = "INSERT INTO users 
        (pseudo, email, password, cvility, firstName, lastName)
        VALUES
        (:pseudo, :email, :password, :civility, :firstName, :lastName)"; // Requête d'insertion que je stock dans une variable
        $request = $pdo->prepare($sql); // Je prépare ma requête et je l'exécute
        $request->execute( 
            array(
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':password' => $password,
            ':civility' => $civility,
            ':firstName' => $firstName,
            ':lastName' => $lastName,

        ));


    }


    ////////////////// Fonction pour vérifier si un email existe dans la BDD ///////////////////////////////

    function checkEmailUser(string $email) :mixed {
        $pdo = connexionBdd();
        $sql = "SELECT * FROM users WHERE email = :email";
        $request = $pdo->prepare($sql);
        $request->execute( array(
            ':email' => $email

        ));

        $resultat = $request->fetch();
        return $resultat;
    }

    ////////////////// Fonction pour vérifier si un pseudo existe dans la BDD ///////////////////////////////

    function checkPseudoUser(string $pseudo) {
        $pdo = connexionBdd();
        $sql = "SELECT * FROM users WHERE pseudo = :pseudo";
        $request = $pdo->prepare($sql);
        $request->execute( array(
            ':pseudo' => $pseudo

        ));

        $resultat = $request->fetch();
        return $resultat;

    }

    /////////// Fonction pour vérifier un utilisateur ////////////////////

    function checkUser(string $email, string $pseudo) :mixed {

        $pdo = connexionBdd();

        $sql = "SELECT * FROM users WHERE pseudo = :pseudo AND email = :email";
        $request = $pdo->prepare($sql);
        $request->execute( array(
            ':pseudo' => $pseudo,
            ':email' => $email


        ));
        $resultat = $request->fetch();
        return $resultat;
    }




    ////////////////////// Une fonction pour la création des clés étrangères //////////////////////////

        // $tableF : table où on va créer la clé étrangère
        // $tableP : table à partir de laquelle on récupère la clé primaire
        // $foreign : le nom de la clé étrangère
        // $primary : le nom de la clé primaire

    function foreignKey(string $tableF, string $foreign, string $tableP, string $primary) {

        $pdo = connexionBdd();

        $sql = "ALTER TABLE $tableF ADD CONSTRAINT FOREIGN KEY ($foreign) REFERENCES $tableP ($primary)";

        $request = $pdo->exec($sql);

    }

    // Création de la clé étrangère dans la table films
    // foreignKey('films', 'category_id', 'categories', 'id_category');




?>