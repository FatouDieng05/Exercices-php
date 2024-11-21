<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre un bien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('images/Arriere plan.jpeg');
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #333;
        }
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: -1;
        }
        
        .main-content {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            max-width: 1200px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        h2 {
            font-size: 36px;
            color: #333;
            text-align: center;
            margin-bottom: 40px;
        }
        .nav-links {
            text-align: center;
            margin: 30px 0;
        }

        .nav-links a {
            color: #E74C3C;
            margin: 0 15px;
            font-size: 18px;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
        }

        .nav-links a:hover {
            background-color: #E74C3C;
            color: white;
            transition: 0.3s ease;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label, input, textarea {
            display: block;
            width: 100%;
            margin: 10px 0;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="main-content">
        <div class="nav-links">
            <a href="http://localhost/Serie_exo/acheter.php">Acheter</a>
            <a href="http://localhost/Serie_exo/louer.php">Louer</a>
        </div>
        <h2>Formulaire de vente</h2>
        <p>Remplissez ce formulaire pour nous transmettre les informations concernant le bien que vous souhaitez vendre.</p>
        <form action="submit_vente.php" method="post">
            <label for="nom">Votre nom :</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="adresse">Adresse du bien :</label>
            <input type="text" id="adresse" name="adresse" required>
            
            <label for="description">Description du bien :</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            
            <button type="submit">Soumettre</button>
        </form>
    </div>

</body>
</html>