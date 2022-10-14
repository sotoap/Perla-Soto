<?php
    /*
    * Descripcion: Componente los datos de formulario.
    * Autor: Perla Soto
    * Fecha: 14 Octubre
    */

    //Obtiene nombre de formulario

    $name = $_POST['nombre'];
    echo "Hola $name";

    $apellido = $_POST['apellido'];
    echo " $apellido <br>";

    $correo = $_POST['correo'];
    echo "Tu correo/número es $correo <br>";

    $contraseña = $_POST['contraseña'];
    echo "Tu contraseña ha sido registrada <br>";

    $fecha = $_POST['fecha'];
    echo "Tu fecha de nacimiento se ha registrado <br>";

    echo "<a href=',,/html/greetingForm.html'> Regresar </a>";