<?php

require("./conexion/conexion.php");

    if(isset($_POST['registrarse'])){
        $documento = trim($_POST['documento']);
        $name = trim($_POST['name']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $consulta2 = "SELECT * FROM cliente WHERE email='$email'";
        $resultado2 = mysqli_query($conn,$consulta2);
    
        if($resultado2){
            $_SESSION['mensaje'] = "Ya existe este Usuario";
            $_SESSION['tipo_mensaje'] = "danger";
        }elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z-0-9])[a-zA-Z-0-9]{6,16}$/', $contraseña))
            {
                // echo "szs";
                $_SESSION['mensaje'] = "La contraseña debe tener al entre 6 y 16 caracteres
                <br>
                Debe contener un caracter numerico";
                $_SESSION['tipo_mensaje'] = "danger";
                // header("Location: registroAdm.php");
            }else{
                $consulta = "INSERT INTO cliente(documento, name, direccion, telefono, email, password) VALUES 
                ('$documento','$name','$direccion','$telefono','$email','$password')";
                $resultado = mysqli_query($conn,$consulta);
                if($resultado){
                    $_SESSION['mensaje'] = "Se ha registrado exitosamente";
                    $_SESSION['tipo_mensaje'] = "info";
                    // header("Location:../login.php");
            }
    }
    }
    
?>