<?php
$mysqli = new mysqli("localhost", "root", "", "organigrame");

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
}

// Fonction pour uploader les données dans la base de données
function uploadData($pdi, $titre, $nom) {
    global $mysqli;

    $sql = "INSERT INTO Employees (pdi, titre, nom) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    
    $stmt->bind_param("iss", $pdi, $titre, $nom);

    // requête
    if ($stmt->execute() === TRUE) {
        echo "Données insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données: " . $mysqli->error;
    }

    $stmt->close();
}


// Fonction pour supprimer une entrée dans la base de données
function deleteEmployee($id) {
    global $mysqli;
    $sql = "DELETE FROM Employees WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute() === TRUE) {
        echo "Entrée supprimée avec succès.";
    } else {
        echo "Erreur lors de la suppression de l'entrée: " . $mysqli->error;
    }

    $stmt->close();
}

// Exemple d'utilisation des fonctions
$pdi = 2;
$titre = "AG";
$nom = "koto";
uploadData($pdi, $titre, $nom);

$employeeIdToDelete = 1; 
/*deleteEmployee($employeeIdToDelete);*/
?>
