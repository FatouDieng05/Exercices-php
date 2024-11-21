<!DOCTYPE html>
<html>
<head>
    <title>Cercle</title>
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
    </style>
</head>
<body>
    <nav>
        <a href="../index.html">Accueil</a>
        <a href="../bibliotheque.php">Bibliothèque</a>
    </nav>

    <div class="container">
        <h1>Exercice 17</h1><br><br>
        <form method="post" action="">
            <label for="angle">Entrez un angle :</label>
            <input type="number" id="angle" name="angle" required><br><br>
            <label for="unite">Entrez l'unité (r = radian, d = degré, g = grade) :</label><br>
            <input type="text" id="unite" name="unite" maxlength = "1" required><br><br>
            <input type="submit" value="Calculer"><br><br><br><br><br>
        </form>

        <?php
        function calculSinus($angle, $unite = 'r') {
            switch ($unite) {
                case 'r':
                    return sin($angle);
                case 'd':
                    return sin(deg2rad($angle));
                case 'g':
                    return sin(deg2rad($angle) * 0.9);
                default:
                    return "Unité invalide";
            }
        }

        if(isset($_POST['angle']) && isset($_POST['unite'])) {
            $angle = $_POST['angle'];
            $unite = $_POST['unite'];
            $sinus = calculSinus($angle, $unite);

            echo "Le sinus de $angle $unite est : $sinus";
        }
        ?>
        <div class="nav-buttons">
            <a href="exercice16.php">Précédent</a>
            <a href="../bibliotheque.php">Suivant</a>   
        </div>
    </div>
</body>
</html>
