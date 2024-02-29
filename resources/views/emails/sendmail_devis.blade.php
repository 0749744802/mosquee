<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        /* Styles inline pour assurer une meilleure compatibilité */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
   <div class="container">
        <h1>Formulaire de demande devis</h1>
        <p>Hello TICAFRIQUE,</p>
        <p>Message reçu de {{ $nom_devis }}!</p>

        <p>Type de personne:</p>
        <ul>
            <li>{{ $personne_devis }}</li>
            <li>Contact:{{ $numero_devis }}</li>
        </ul>
        <p>Localisation & domaine:</p>
        <ul>
            <li>Domaine:{{ $domaine_devis }}</li>
            <li>Pays:{{ $pays_devis }}</li>
            <li>Ville:{{ $ville_devis }}</li>
            <li>Adresse:{{ $adresse_devis }}</li>

        </ul>
        <p>Iformations personne contact:</p>
        <ul>
            <li>Nom:{{ $nom_devis }}</li>
            <li>Email:{{ $emailc_devis }}</li>
            <li>Contact:{{ $numeroc_devis }}</li>


        </ul>
        <p>Nos coordonnées:</p>
        <p>TICAFRIQUE <a href="www.ticafrique.com">www.ticafrique.com</a>.</p>

        <a href="#" >+225xxxxxxxx</a>
        <p>Merci,<br>à la prochaine</p>
    </div>
</body>
</html>
