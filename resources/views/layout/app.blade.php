<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Plataforma de Cursos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
            font-size: 0.9em;
        }
        header {
            background-color: #333;
            color: #f5f5f5;
            padding: 10px 0;
            text-align: center;
            height: 20%;
            position: flex;
        }
        footer {
            background-color: #333;
            color: #f5f5f5;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        
        .container {
            margin: auto;
            width: 80%;
            height: auto;
            overflow: auto;
            padding: 20px;
            margin-top: 1%;
        }
        a {
            color: #f5f5f5;
            text-decoration: none;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <header>
        <div style="font-size:200%;" >Libreria Chuy</div>
        <nav>
            <a href="../books">Inicio</a>
            <a href="../public/books/create">Crear</a>
          
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div>
            <p>La libreria de chuy</p>
            <p>
                <a>Política de Privacidad</a>
                <a>Términos y Condiciones</a>
                <a>Contacto</a>

            </p>
        </div>
    </footer>
</body>
</html>
