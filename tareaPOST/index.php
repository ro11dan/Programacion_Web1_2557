<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1</title>
</head>
<body>
    <h1>Operaciones con números</h1>
    <h2>Ingrese los números</h2>
    <form action="logica.php" method="post">
        <label for="">Primer número</label>
        <input type="text" name="primero" required>
        <br>
        <label for="">Segundo número</label>
        <input type="text" name="segundo" required>
        <br><br>
        <button type="submit" name="action" value="sumar">Sumar</button>
        <button type="submit" name="action" value="restar">Restar</button>
        <button type="submit" name="action" value="multiplicar">Multiplicar</button>
        <button type="submit" name="action" value="dividir">Dividir</button>
    </form>
</body>
</html>