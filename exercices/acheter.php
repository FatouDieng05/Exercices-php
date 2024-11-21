<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un bien</title>
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
        h1 {
            font-size: 36px;
            color: #333;
            text-align: center;
            margin-bottom: 40px;
        }
        .property-list {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .property {
            flex: 1;
            background-color: white;
            text-align: center;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .property img {
            max-width: 100%;
            border-radius: 10px;
        }
        .property h3 {
            color: #333;
            margin: 15px 0 10px;
        }
        .property p {
            color: #777;
            font-size: 16px;
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
            margin-top: 40px;
            text-align: center;
        }
        input, button {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            max-width: 400px;
            font-size: 16px;
            border: 1px solid #ccc;

        }
        button {
            background-color: #E74C3C;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #C0392B;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Nos biens à vendre</h1>
        <div class="nav-links">
            <a href="http://localhost/Serie_exo/vendre.php">Vendre</a>
            <a href="http://localhost/Serie_exo/louer.php">Louer</a>
        </div>
        <div class="property-list">
            <div class="property">
                <img src="images/Maison paris.jpg" alt="Maison à Paris">
                <h3>Maison à Paris</h3>
                <p>Prix : 750 000 €</p>
            </div>
            <div class="property">
                <img src="images/Appart lyon.jpeg" alt="Appartement à Lyon">
                <h3>Appartement à Lyon</h3>
                <p>Prix : 350 000 €</p>
            </div>
            <div class="property">
                <img src="images/Villa nice.jpeg" alt="Villa à Nice">
                <h3>Villa à Nice</h3>
                <p>Prix : 1 200 000 €</p>
            </div>
        </div>

        <form action="submit_achat.php" method="post">
            <label for="nom">Votre nom :</label>
            <input type="text" id="nom" name="nom" required>
            
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>
            
            <button type="submit">Contacter l'agence</button>
        </form>
    </div>

</body>
</html>