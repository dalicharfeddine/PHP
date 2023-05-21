<?php
class config {
  private static $pdo = NULL;

  public static function getConnexion() {
    if (!isset(self::$pdo)) {
      try {
        self::$pdo = new PDO('mysql:host=localhost;dbname=php', 'root', '', [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

      } catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
      }
    }
    return self::$pdo;
  }
}

// Exemple d'utilisation
$config = config::getConnexion();
// Vous pouvez maintenant utiliser la variable $config pour exécuter des requêtes sur la base de données

?>
