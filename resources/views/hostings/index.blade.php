<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applicationlaravel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        strong {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur notre plateforme d'hébergement</h1>
    </header>

    <section>
        <h1>Liste des hébergements disponibles</h1>

        <ul>
            @foreach($hostings as $hosting)
                <li>
                    <strong>{{ $hosting['name'] }}</strong>
                    <p>{{ $hosting['description'] }}</p>
                    <p><strong>Prix:</strong> ${{ number_format(rand(50, 200), 2) }}/mois</p>
                    <p><strong>Espace disque:</strong> {{ rand(50, 500) }} Go</p>
                    <p><strong>Bande passante:</strong> {{ rand(100, 1000) }} Go/mois</p>
                    <a href="#" style="color: #3490dc; text-decoration: none;">En savoir plus</a>
                </li>
            @endforeach
        </ul>
    </section>
</body>
</html>
