<?php
// Formulario de entrada del dato
?>

<html>

<head>
  <title>Formulario de entrada del dato</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 50px;
    }

    .contenedor {
      width: 400px;
      margin: auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }
  </style>

</head>

<body>

  <div class="contenedor">

    <h1>Formulario de entrada</h1>

    <form method="post" action="procesar_formulario.php">

      <label for="nombre">Ingrese su nombre:</label>
      <input type="text" name="nombre" id="nombre">

      <label for="edad">Ingrese su edad:</label>
      <input type="text" name="edad" id="edad">

      <input type="submit" value="Confirmar">

    </form>

  </div>

</body>

</html>
