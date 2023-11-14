<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '
<script>alert("registro éxitoso");</script>';
    }
    if ($_GET['status'] == 2) {
        echo '
<script>alert("El usuario ya existe");</script>';
    }
    if ($_GET['status'] == 3) {
        echo '
<script>alert("Acceso denegado");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <header>
        <div class="videocontenedor">
            <video class="video" autoplay loop muted>
                <source src="img/logovideo.mp4" type="video/mp4">
            </video>
        </div>
        <img src="img/ImagenDivisas.png" alt="logo">
        <nav>
            <ul>
                <li>
                    <a href="">Nosotros DvC</a>
                </li>
                <li>
                    <a href="">Cajeros</a>
                </li>
                <li>
                    <a href="http://localhost/Fullstack/ProyectoFrontEnd_Backend/registro.php">Registro</a>
                </li>
                <li>
                    <a href="http://localhost/Fullstack/ProyectoFrontEnd_Backend/ingresar.php"><i class="fa-solid fa-user"></i>  Ingreso</a>
                </li>


            </ul>
        </nav>

    </header>
    <main id="sesiondivisas">
        <section id="comprardivisas">
            <form action="back/registrousuario.php" method="POST">
                <div class="container">
                    <h1 class="title">Registro Usuario</h1>
                    <br />
                    <br />
                    <div class="card">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="email" value="">
                        <label for="pass">Password</label>
                        <input id="pass" name="pass" type="password" value="">
                        <label for="nombre">Nombre Completo</label>
                        <input id="pass" name="nombre" type="text" value="">
                        <label for="celular">Celular</label>
                        <input id="pass" name="celular" type="number" value="">
                        <label for="identificacion">Numero Cedula o pasaporte</label>
                        <input id="pass" name="identificacion" type="number" value="">
                        <input type="submit" name="registrar" class="btn" value="Enviar">
                    </div>
                </div>
            </form>
        </section>

        <aside>

            <table id="tablerosprecios">

                <tr class="dolar">
                    <td>precio 1 dolar</td>
                    <td>$4350 Pesos Colombiano</td>
                </tr>
                <tr class="euro">
                    <td>precio 1 euro</td>
                    <td>$4560 pesos Colombinos</td>
                </tr>
            </table>

            <img src="img/tableroprecios.png" alt="tableroprecio" />


        </aside>

    </main>



    <section id="informaciondvc">


        <p>
            <b>1.</b> Elige la Modena quieres&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br> Comprar
        </p>
        <p>
            <b>2.</b>Compra tu Moneda&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </p>
        <p>
            <b>3.</b> Retirala en nuestros Cajeros DvC
        </p>

        <div class="iconos">


            <a class="face">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a class="whatsap" href="">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a class="insta" href="">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>


    </section>
</body>
</html>