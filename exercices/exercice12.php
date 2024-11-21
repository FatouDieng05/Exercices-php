<!DOCTYPE html>
<html>
<head>
    <title>Adresse client</title>
    <style>
        nav {
            width: 100%;
            background-color: #fff;
            padding: 10px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.2em;
            color: #007BFF;
            transition: transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
            padding: 10px 20px;
            border-radius: 30px;
            display: inline-block;
        }
        nav a:hover {
            transform: scale(1.1);
            color: #0056b3;
            background-color: #f0f0f0;
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.5);
        }
        /* Style de base */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            align-items: center;
        }

        /* Conteneur global */
        .container {
            max-width: 600px;
            width: 400px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Style du titre principal */
        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }

        /* Style des boutons du formulaire */
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        /* Style des boutons de navigation */
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .nav-buttons a {
            display: inline-block;
            width: 120px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .nav-buttons a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
        }
        table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav>
        <a href="../index.html">Accueil</a>
        <a href="../bibliotheque.php">Bibliothèque</a>
    </nav>
    <div class="container">
        <h2>Exercice 12 : Adresse Client</h2>
        <form method="post" action="">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required><br><br>
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br><br>
            <label for="codePostal">Code postal :</label>
            <input type="number" id="codePostal" name="codePostal" required><br><br>
            <input type="submit" value="Soumettre"><br><br><br><br><br>
        </form>
        <?php
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['ville']) && isset($_POST['codePostal'])) {
            echo "<table>";
            echo "<tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
            </tr>";
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $codePostal = $_POST['codePostal'];

            $infos = [
                "nom" => $nom,
                "prenom" => $prenom,
                "adresse" => $adresse,
                "ville" => $ville,
                "codePostal" => $codePostal
            ];
            echo "<tr>
                <td>{$infos['nom']}</td>
                <td>{$infos['prenom']}</td>
                <td>{$infos['adresse']}</td>
                <td>{$infos['ville']}</td>
                <td>{$infos['codePostal']}</td>
            </tr>";
            
        }
        echo "</table>";
        ?>
        <div class="nav-buttons">
            <a href="exercice11.php">Précédent</a>
            <a href="exercice14.php">Suivant</a>   
        </div>
    </div>
</body>
</body>
</html>
