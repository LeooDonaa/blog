<?php
    // Define a variável de sessão 'url_retorno' como o caminho do script atual
    $_SESSION['url_retorno'] = $_SERVER['PHP_SELF'];

    // Verifica se a variável de sessão 'login' não está definida (usuário não autenticado)
    if (!isset($_SESSION['login'])) {
        // Redireciona o usuário para a página de formulário de login
        header('Location: login_formulario.php');
        exit; // Encerra a execução do script para evitar qualquer processamento adicional
    }
?>
