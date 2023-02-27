<?php session_start() ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/output.css" rel="stylesheet">
    <script>
        function cambiar(el, id) {
            el.preventDefault();
            const oculto = document.getElementById('oculto');
            oculto.setAttribute('value', id);
        }
    </script>
    
    <title>Edit de articulos</title>


    </head>
<body>



<!-- Formulario de edición -->
<form action="update.php" method="post">
  <input type="hidden"  name="id" value="<?php echo $id; ?>">
  <label for="codigo">Codigo:</label>
  <input type="text" placeholder="Introduzca un codigo nuevo" name="codigo" value="<?php $articulos ['codigo']; ?>"><br>
  <label for="descripcion">Descripcion:</label>
  <input type="text" placeholder="Introduzca una nueva descripcion" name="descripcion" value="<?php echo $descripcion; ?>"><br>
  <label for="precio">Precio:</label>
  <input type="text" placeholder="Introduzca un nuevo precio" name="precio" value="<?php echo isset ($precio) ? $precio: ''; ?>"><br>
  <label for="categoria">Categoria:</label>

<select name="categorias">
  <option value="categorias">Pc</option>
  <option value="categorias">Meriendas</option>
</select>
<br>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Button
</button>
</form>


</body>
<script src="/js/flowbite/flowbite.js"></script>
</html>

