<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page des Exercices PHP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
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


        .container {
            max-width: 1200px;
            margin: 20px auto;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.5em;
            color: #666;
            margin-bottom: 40px;
        }

        .exercise-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .exercise-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .exercise-card:hover {
            transform: scale(1.05);
        }

        .exercise-title {
            font-size: 1.8em;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .exercise-description {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 20px;
        }

        .exercise-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        
        .exercise-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.html">Accueil</a>
        <a href="bibliotheque.php">Bibliothèque</a>
    </nav>
    <div class="container">
        <h1>Série N° 1 : PHP-MySQL</h1>
        <p>Explorez les différents exercices pour améliorer vos compétences en PHP. Cliquez sur un exercice pour en savoir plus.</p>

        <div class="exercise-grid">
            <div class="exercise-card">
                <div class="exercise-title">Exercice 1</div>
                <div class="exercise-description">Ce programme prend un mot saisi par l'utilisateur et vérifie s'il s'agit d'un 
                    palindrome. </div>
                <a href="exercices/exercice1.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 2</div>
                <div class="exercise-description">Ce programme teste si un nombre est à la fois un multiple de 3 et de 5.</div>
                <a href="exercices/exercice2.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 3a</div>
                <div class="exercise-description">Ce programme permet d'effectuer des tirages aléatoires et de compter le nombre de tirages nécessaire pour obtenir le nombre initial avec l'instruction while.</div>
                <a href="exercices/exercice3a.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 3b</div>
                <div class="exercise-description">Ce programme permet d'effectuer des tirages aléatoires et de compter le nombre de tirages nécessaire pour obtenir le nombre initial avec la boucle for.</div>
                <a href="exercices/exercice3b.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 4</div>
                <div class="exercise-description">Ce programme permet de calculer le PPCM de deux entiers saisis au clavier. </div>
                <a href="exercices/exercice4.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 5</div>
                <div class="exercise-description">Ce programme calcule le diamètre, le périmètre et la surface d’un cercle dont le rayon est saisi au clavier. </div>
                <a href="exercices/exercice5.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 6</div>
                <div class="exercise-description">Ce programme affiche l’ensemble des diviseurs d’un nombre saisi au clavier. </div>
                <a href="exercices/exercice6.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 7</div>
                <div class="exercise-description">Ce programme teste si un nombre saisi au clavier est parfait.</div>
                <a href="exercices/exercice7.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 8</div>
                <div class="exercise-description">Ce programme prend un tableau d'entiers saisi par l'utilisateur et calcule la moyenne, le maximum et le minimum de ces nombres. </div>
                <a href="exercices/exercice8.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 9</div>
                <div class="exercise-description">Ce programme permet d'évrire un tableau multidimensionnel associatif dont les clés sont des noms de personne et les valeurs des tableaux associatifs dont les clés sont le prénom, la ville de résidence et l’âge de la personne avec une série de valeurs associées.</div>
                <a href="exercices/exercice9.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 10</div>
                <div class="exercise-description">Ce programme demande à l'utilisateur de saisir une chaîne de caractères, puis compte et affiche le nombre de voyelles et de consonnes présentes dans la chaîne.</div>
                <a href="exercices/exercice10.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 11</div>
                <div class="exercise-description">Ce programme prend une date saisie par l'utilisateur et calcule le nombre de jours restants jusqu'à la fin de l'année.</div>
                <a href="exercices/exercice11.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 12</div>
                <div class="exercise-description"> Ce programme est un formulaire comprenant un groupe de champs ayant pour titre "Adresse client". Les données sont ensuite traitées par un fichier PHP séparé récupérant les données et les affichant dans un tableau XHTML. </div>
                <a href="exercices/exercice12.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 14</div>
                <div class="exercise-description">Ce programme est un formulaire demandant la saisie d’un prix HT et d’un taux de TVA. Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement.</div>
                <a href="exercices/exercice14.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 15</div>
                <div class="exercise-description">Ce programme est un formulaire comprenant trois boutons Submit nommés Vendre, Acheter et Louer. En fonction du choix effectué par le visiteur, redirigez-le vers une page spécialisée dont le contenu réponde au critère choisi. </div>
                <a href="exercices/exercice15.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 16</div>
                <div class="exercise-description">Ce programme est une fonction dont le paramètre passé par référence est un tableau de chaînes de caractères et qui transforme chacun des éléments du tableau de manière que le premier caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale des éléments, même si elle est mixte. </div>
                <a href="exercices/exercice16.php" class="exercise-button">Voir l'exercice</a>
            </div>

            <div class="exercise-card">
                <div class="exercise-title">Exercice 17</div>
                <div class="exercise-description"> écrivez une fonction qui donne le sinus d’un angle donné en radian, en degré ou en grade.</div>
                <a href="exercices/exercice17.php" class="exercise-button">Voir l'exercice</a>
            </div>

        </div>
    </div>

</body>
</html>