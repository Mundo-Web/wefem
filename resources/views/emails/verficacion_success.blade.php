<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación Exitosa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .container {
            width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .logo img {
            max-width: 150px;
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            margin-top: 20px;
            background-color: #ed1b2f;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>

<body
    style="  margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color:#eff1fb ;
            display: flex;
            align-items: center;
            justify-content: center;
           
            ">
    <div class="email-container "
        style="  width: 600px;
            margin: 0 auto;

            background-color: #ffffff;
          

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <!-- Logo -->
        <div class="logo"
            style="width: 100% ; height: max-content;background: rgb(0,15,37);
background: linear-gradient(13deg, rgba(0,15,37,1) 46%, rgba(237,27,47,1) 100%);text-align: center;color:#ffffff;padding-top:20px; padding-bottom: 20px ">
            <img src="cid:logo_img" alt="Dar Telecom">

            <p style="font-size: 28px; font-weight: 700; line-height: 32px; color:white;">¡Correo Verificado con Éxito!
            </p>
        </div>

        <div style="padding: 20px;">
            <p>Hola, {{ $message->email }} 🎉</p>
            <p>Tu dirección de correo electrónico ha sido verificada correctamente.</p>
            <p>Ahora podrás recibir nuestras últimas noticias.</p>
            <div style="text-align: center">

                <a href="{{ config('app.url') }}" class="button"
                    style=" display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #ed1b2f;
         
            color: #ffffff;
            text-decoration: none;
            border-radius: 3rem;
            font-size: 16px;">Visita
                    nuestra web</a>
            </div>
            <div class="footer">
                <p>Saludos cordiales,</p>
                <p>El equipo de Dar Telecom</p>
            </div>
        </div>
    </div>
</body>

</html>
