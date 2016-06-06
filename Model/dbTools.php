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
    $sql = $co->query('SHOW DATABASES');
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
}
function GetTableDB($db,$dbname)
{
    $sql = $db->query("SELECT TABLE_NAME FROM TABLES WHERE TABLE_SCHEMA = '" . $dbname . "'");
    $result = $sql->fetchAll(PDO::FETCH_COLUMN);
    return ($result);
<<<<<<< HEAD

=======
>>>>>>> 0938d0cff2c992ec1ccc5c5cca62a8b19118f582
}
function deleteBDD($db,$dbname)
{
<<<<<<< HEAD
    $sql = $cr->query("CREATE DATABASE IF NOT EXISTS `".$dbname."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
    $result->prepare($sql)->execute();
    return ($result);
}
=======
  $sql = $db->query("DROP DATABASE $dbname");
  return ($sql);
}
>>>>>>> 0938d0cff2c992ec1ccc5c5cca62a8b19118f582
