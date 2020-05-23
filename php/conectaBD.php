<?php

    $conectar=@mysql_connect('localhost','root', '',);

    if (!$conectar) {
      echo "no se pudo conectar";
    }else {
      $base=mysql_select_db('juegos');
      if (!$base) {
        echo "ne se encontro la base de datos";
      }
    }
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $phone=$_POST['Phone'];
  $subject=$_POST['Subject'];
  $mess=$_POST['Mess'];

  $sql="INSERT INTO contact VALUES('$name',
                                   '$email',
                                   '$phone',
                                   '$subject',
                                   '$mess')";
  $ejecutar=mysql_query($sql);

  if (!$ejecutar) {
    echo "hubo un error";
  }else {
    echo "datos guardados <br><a href= 'store.html'>volver</a>";
  }

// $servidor="localhost";
// $usuario="root";
// $clave="";
// $baseDeDatos="juegos";
//
// $enlace=mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);
?>
