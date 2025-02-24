<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Blog Publicado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            font-size: 16px;
        }

        .blog-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 20px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .content {
            text-align: center;
            padding: 20px;
        }

        .content h1 {
            font-size: 24px;
            color: #000f25;
            /* Color del título */
            margin-bottom: 10px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            /* Color del texto */
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="logo"
            style="width: 100% ; height: max-content;background: rgb(0,15,37);
background: linear-gradient(13deg, rgba(0,15,37,1) 46%, rgba(237,27,47,1) 100%);text-align: center;color:#ffffff;padding-top:20px; padding-bottom: 20px ">
            <img src="{{ $message->embed(public_path() . '/images/img/logo/DarTelecom.png') }}" alt="Logo">

            <p style="font-size: 28px; font-weight: 700; line-height: 32px;color:white">{{ $blog->titulo }}</p>
        </div>


        <div class="content">
            @if ($blog->imagen)
                <img src="{{ $message->embed(public_path($blog->imagen)) }}" alt="{{ $blog->titulo }}"
                    class="blog-image">
            @endif

            <p><strong>Resumen:</strong> {{ $blog->extracto }}</p>

            <p>¡Ya puedes leer nuestro nuevo post!</p>

            <!-- Botón de acción -->
            <a href="{{ config('app.url') . '/post/' . $blog->slug }}" class="button"
                style=" display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #ed1b2f;
         
            color: #ffffff;
            text-decoration: none;
            border-radius: 3rem;
            font-size: 16px;">
                Leer más 📖</a>
        </div>


    </div>

</body>

</html>
