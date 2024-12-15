<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se um arquivo foi enviado
    if (isset($_FILES['image'])) {
        // Recupera o arquivo enviado
        $image = $_FILES['image'];

        // Verifica se houve algum erro no upload
        if ($image['error'] === UPLOAD_ERR_OK) {
            // Lê o conteúdo do arquivo de imagem
            $image_data = file_get_contents($image['tmp_name']);

            // Converte os dados binários da imagem para Base64
            $base64_string = base64_encode($image_data);

            // Caminho onde o arquivo de texto será salvo
            $file_path = 'imagem.txt'; // Arquivo de texto que conterá a string Base64

            // Abre ou cria o arquivo de texto para escrita
            $file = fopen($file_path, 'w');

            if ($file) {
                // Escreve a string Base64 no arquivo de texto
                fwrite($file, $base64_string);

                // Fecha o arquivo
                fclose($file);

                echo "A imagem foi salva como Base64 no arquivo 'imagem.txt'.";
            } else {
                echo "Erro ao abrir o arquivo para escrita.";
            }
        } else {
            echo "Erro ao fazer upload da imagem. Código de erro: " . $image['error'];
        }
    } else {
        echo "Nenhum arquivo de imagem foi enviado.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
