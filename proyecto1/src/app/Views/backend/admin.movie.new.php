<html>
<head>
    <title>Insertar una nueva película</title>
</head>
<body>
    <main>
        <form method="POST" action="/movie" enctype="multipart/form-data">
            <label for="inputTitulo">Titulo de la pelicula</label>
            <input type="text" id="inputTitulo" name="titulo"><br><br>

            <label for="inputDuracion">Duración de la pelicula</label>
            <input type="number" id="inputDuracion" name="duracion"><br><br>

            <label for="inputDescripcion">Descripción de la pelicula</label>
            <textarea type="text" id="inputDescripcion" name="descripcion" rows="5" cols="20"></textarea><br><br>

            <label for="inputPortada">Insertar imagen de la portada</label>
            <input type="file" id="inputPortada" name="portada"><br><br>

            <select id="optionCategotia" name="categoria">
                <option>Todos los publicos</option>
                <option>+16</option>
                <option>+18</option>
            </select><br><br>

            <input type="checkbox" id="inputGenero" name="genero[]" value="comedia">;
            <label for="optionGeneroComedia>">Comedia</label>
            <input type="checkbox" id="inputGenero" name="genero[]" value="drama">;
            <label for="optionGeneroComedia>">Drama</label>
            <input type="checkbox" id="inputGenero" name="genero[]" value="terror">;
            <label for="optionGeneroComedia>">Terror</label>

            <br><br><input type="submit">

        </form>
    </main>

</body>
</html>