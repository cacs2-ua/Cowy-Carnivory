<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Cowy Carnivory</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            color: #014E7A;
            font-family: 'Verdana', sans-serif;  
            <!--background-color: #120903;-->
        }


        .navbar {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 16px;
            margin: 0; 
            background-color: #e6e6fa;
        }

        .navbar li {
            margin-right: 20px; 
        }

        .navbar a {
            text-decoration: none;
            color: #014E7A;
            padding: 8px 16px;
            font-size: 16px; 
        }

        .navbar a.bold {
            font-weight: bold; 
        }
    </style>
</head>
<body>
    <header>

    </header>

    <ul class="navbar">
      <li><a class="bold" href="/">Home</a></li>
      <li><a href="/vendor">Vendors</a></li>
      <li><a href="/product">Information</a></li>
      <li><a href="/customer">Contact</a></li>
    </ul>

    <footer>

    </footer>
</body>
</html>