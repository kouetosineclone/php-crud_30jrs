<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application CRUD - Jour 2</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>🚀 Bienvenue dans mon Application CRUD</h1>
        
        <?php
        // Test de connexion à la base de données
        require_once 'config/database.php';
        
        $database = new Database();
        $db = $database->getConnection();
        
        if($db) {
            echo "<div class='success'>✅ Connexion à la base de données réussie !</div>";
            
            // Test : afficher les utilisateurs
            $query = "SELECT * FROM users LIMIT 3";
            $stmt = $db->prepare($query);
            $stmt->execute();
            
            echo "<h2>Utilisateurs dans la base :</h2>";
            echo "<ul>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>" . htmlspecialchars($row['name']) . " - " . htmlspecialchars($row['email']) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<div class='error'>❌ Erreur de connexion à la base de données</div>";
        }
        ?>
        
        <div class="info-box">
            <h3>📋 Ce que nous avons accompli aujourd'hui :</h3>
            <ul>
                <li>✅ Structure de projet organisée</li>
                <li>✅ Base de données créée</li>
                <li>✅ Table 'users' avec données de test</li>
                <li>✅ Connexion PHP à MySQL</li>
                <li>✅ Première lecture de données</li>
            </ul>
        </div>
    </div>
</body>
</html>