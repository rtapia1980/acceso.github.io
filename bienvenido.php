<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
</head>
<body>
<?php
$error;
$usuario=$_POST['txtusuario'];
$password=$_POST['txtpass'];

if($usuario=="senati" && $password=="1234")
{
  echo "<h2>Bienvenido al sistema</h2>";
}
else
{
 echo "<h2> Datos ingresados incorrectos</h2>";
 $error="incorrecto";
 header("location:index.php?retornar=$error");
}


?>

                   
</body>
</html>