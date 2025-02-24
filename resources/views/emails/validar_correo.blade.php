<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo de Bienvenida</title>
    <style>
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
            height: auto;
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




        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #000f25;
            /* Color del texto del footer */
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


            <p style="font-size: 28px; font-weight: 700; line-height: 32px">¡Gracias por Subscribirte!</p>
        </div>

        <!-- Contenido -->
        <div class="content">
            <h1 style="">Hola, {{ $message->email }}!</h1>


            <p>Para confirmar tu cuenta, haz clic en el siguiente botón:</p>
            <!-- Botón de acción -->
            <a href="{{ $verificationLink }}" class="button"
                style=" display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background-color: #ed1b2f;
         
            color: #ffffff;
            text-decoration: none;
            border-radius: 3rem;
            font-size: 16px;">Confirmar</a>
        </div>

        <!-- Saludos cordiales -->
        <div class="footer">
            <p>Saludos cordiales,</p>
            <p>El equipo de Dar Telecom</p>
        </div>
    </div>
</body>

</html>
