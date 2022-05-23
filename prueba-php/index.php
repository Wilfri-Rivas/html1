
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/logo" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/form.css">
    <title>Registrar</title>
    <style type="text/css">
        *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: arial,sans-serif;
}
body
{
    overflow: hidden;
    background: #1a242a;
}
section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
section .color
{
    position: absolute;
    filter: blur(150px);
}
section .color:nth-child(1)
{
    top: -350px;
    width: 600px;
    height: 600px;
}
section .color:nth-child(2)
{
    bottom: -150px;
    left: 100px;
    width: 500px;
    height: 500px;
}
section .color:nth-child(3)
{
    bottom: 50px;
    right: 100px;
    width: 300px;
    height: 300px;
}
.box
{
    position: relative;
}

.box .square:nth-child(1)
{
    top: -50px;
    right: -60px;
    width: 100px;
    height: 100px;
}
.box .square:nth-child(2)
{
    top: 150px;
    left: -100px;
    width: 120px;
    height: 120px;
    z-index: 2;
}
.box .square:nth-child(3)
{
    bottom: 50px;
    right: -60px;
    width: 80px;
    height: 80px;
}
.box .square:nth-child(4)
{
    bottom: -80px;
    left: 100px;
    width: 50px;
    height: 50px;
}
.box .square:nth-child(5)
{
    top: -80px;
    left: 140px;
    width: 60px;
    height: 60px;
}
.container
{
    position: relative;
    width: 400px;
    min-height: 400px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.1);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
        bottom:400px;
}
.form
{
    position: relative;
    width: 100%;
    height: 100%;
    padding: 40px;
}
.form h2
{
    position: relative;
    color: #dff1f4;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 40px;
}
.form h2::before
{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    width: 131px;
    height: 4px;
    background: #f1f4f9;
}
.form .inputBox
{
    width: 100%;
    margin-top: 20px;
}

.form .inputBox input:focus{
    border:2px solid black;




}
.form .inputBox input
{
    width: 100%;
    background: rgba(255,255,255,0.2);
    border: none;
    outline: none;
    padding: 10px 20px;
    border-radius: 35px;
    border: 1px solid rgba(255,255,255,0.1);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    letter-spacing: 1px;
    font-size: 16px;
    color: #00098D;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}
.form .inputBox input::placeholder
{
    color: #FF8B00;
}
.form .inputBox input[type="submit"]
{
    background: #fff;
    color: #666;
    max-width: 100px;
    cursor: pointer;
    margin-bottom: 20px;
    font-weight: 600;
}
.forget
{
    margin-top: 5px;
    color: #f1f4f9;
}
.forget a
{
    color: #f1f4f9;
    font-weight: 600;
}

.logo{
margin-left:45%;

    }
    .laimagen{
     width:120px;
     height:100px;
     margin-left:85px;
    }
    </style>

</head>
<body>
    
    <section>
        <div class="color"> </div>
        <div class="color"> </div>
        <div class="color"> </div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <img class="laimagen" src="logo.png" class="logo">
                    <h2>Login form</h2>
                    <form method="POST">
                        <div class="inputBox">
                            <input type="text" name="nombre" placeholder="Username" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="contraseña" placeholder="Password" required>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="correo" placeholder="Email" required>
                        </div>
                        <div class="inputBox">
                        <input type="submit" value="Login" name="luz" required>
                        </div>
                        <p class="forget">
                            Forgot Password ? 
                            <a href="#">
                                Click Here
                            </a>
                        </p>
                        <p class="forget">
                            Don't have an account ?
                            <a href="#">
                                Sign up
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
    if(isset($_POST['nombre'])){
        $conn=new mysqli('localhost','root','','revisar');
        $conn->query("CREATE TABLE if NOT EXISTS recuerdo(
              id_recuerdo int AUTO_INCREMENT,
              nombre varchar(127),
              contraseña varchar(127),
              correo varchar(127),
              PRIMARY KEY(id_recuerdo)
              );        
         ");
        if($conn->query("
            INSERT INTO recuerdo (nombre, contraseña, correo) VALUES (
                '".$conn->real_escape_string($_POST['nombre'])."',
                '".$conn->real_escape_string($_POST['contraseña'])."',
                '".$conn->real_escape_string($_POST['correo'])."'

            );      
        ")) echo 'Mensaje correctamente registrado';
        else echo 'Hemos tenido dificultades registrando tu mensaje, por favor reinténtalo';
    }
    
