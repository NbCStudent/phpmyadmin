<?php

function dbConnect($bddname)
{
    $dsn = "mysql:host=localhost;dbname=$bddname;charset=utf8";
    $user = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    return ($dbh);
}
function GetAllDB($co)
{
    $sql = $co->query('SELECT table_schema FROM TABLES GROUP BY table_schema');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA = '".$dbname."'");
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function AddNewDB($cr, $dbname)
{
    $sql = $cr->query("CREATE DATABASE IF NOT EXISTS `".$dbname."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
    $result->prepare($sql)->execute();
    return ($result);
}

/*public function addDB($newDBname)
{
    $model = $this->getModel();
    $result = $model->add_new_db($newDBname);
    if ($result->errorInfo()[1] == NULL) {
        $this->writeFile("La base de données $newDBname a été créé");
        echo 1;
    } else
        $this->return_error($result);
    unset($model);
}*/




/* CREATE A TABLE

// connexion à la bdd
$connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

// on vérifie que la connexion est bonne
if($connexion){
    // on créer la requête
    $requete = "CREATE TABLE IF NOT EXISTS `".DB_NAME."`.`".DB_TABLE."` (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`email` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
		`created` DATETIME NOT NULL
		) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;";

    // on prépare et on exécute la requête
    $connexion->prepare($requete)->execute();
}
*/


/* CREATE A DATABASE

1)
function AddNewDB($cr){
$sql = $cr->query('CREATE DATABASE myDBPDO');
$result = $sql->fetchAll(PDO::FETCH_COLUMN);
return ($result);
echo "Database created successfully<br>";
}*/

/* 2)
 *
 * $pdo = new PDO('mysql:host=localhost', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

$heure = time();
$requete = "CREATE DATABASE test$heure DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";
$pdo->prepare($requete)->execute();*/

/* 3)

$req = $bdd -> prepare("CREATE DATABASE IF NOT EXISTS :pseudo" );*/

/*try {
    $dbh = new PDO("mysql:host=$host", $root, $root_password);

    $dbh->exec("CREATE DATABASE `$db`;
                CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                GRANT ALL ON `$db`.* TO '$user'@'localhost';
                FLUSH PRIVILEGES;")
    or die(print_r($db->errorInfo(), true));

} catch (PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}*/

/* 4)

Create database
function AddNewDB()
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=myDB", root, root);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}*/