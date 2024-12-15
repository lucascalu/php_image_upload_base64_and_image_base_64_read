<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Imagem Base64</title>
</head>
<body>

<h2>Imagem Carregada a partir de Base64</h2>

<!-- Elemento para exibir a imagem -->
<img id="image" src="" alt="Imagem Carregada" style="max-width: 100%; height: auto;"/>

<script>
// Função para carregar a string Base64 do arquivo e exibir a imagem
function carregarImagemBase64() {
    fetch('imagem.txt')
        .then(response => response.text()) // Lê o conteúdo do arquivo como texto
        .then(base64 => {
            // Define o src da imagem para a string Base64
            const imgElement = document.getElementById('image');
            imgElement.src = 'data:image/png;base64,' + base64; // Adiciona o prefixo correto para o tipo de imagem (aqui é PNG)
        })
        .catch(error => {
            console.error('Erro ao carregar a imagem:', error);
        });
}

// Chama a função ao carregar a página
window.onload = carregarImagemBase64;
</script>

</body>
</html>
