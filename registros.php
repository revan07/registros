
<html>
<head>
<title>registros</title>
</head>
<body>
<?php

 /*aqui es donde hacemos nuestra conexion de php y mysql solo poner
 su servidor nombre de usuario y su clave y la base de dato que creo*/
$conexion=mysqli_connect("localhost","sepulveda","luis0703","alumnos") or
die("Problemas con la conexión");

/*aqui es donde conectamo el php a la tabla que crearon al database*/
$registros=mysqli_query($conexion,"select codigo, nombre, mail, codigocurso from estudiantes") or
die("Problemas en el select:".mysqli_error($conexion));

/* aqui es donde se imprime en la pagina cuando ejecutamos nuestro .php,*/
while ($reg=mysqli_fetch_array($registros))
{
    echo "ID:".$reg['codigo']."<br>";
    echo "Name:".$reg['nombre']."<br>";
    echo "Gmail:".$reg['mail']."<br>";
    echo "Curso:";
    echo "<br>";
    echo "<hr>";
}

mysqli_close($conexion);
?>
</body>
</html>
