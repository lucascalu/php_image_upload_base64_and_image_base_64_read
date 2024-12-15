<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Imagem</title>
</head>
<body>

<h2>Envie sua Imagem</h2>
<form method="POST" action="salvar_imagem.php" enctype="multipart/form-data">
    <label for="image">Escolha a imagem:</label>
    <input type="file" name="image" id="image" accept="image/*" required><br><br>
    <button type="submit">Salvar Imagem</button>
</form>

</body>
</html>
