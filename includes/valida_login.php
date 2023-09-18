<?php
// Inicia a sessão PHP para lidar com variáveis de sessão.
session_start();

// Define a variável de sessão 'url_retorno' com o valor da página atual.
$_SESSION['url_retorno'] = $_SERVER['PHP_SELF'];

// Verifica se o usuário não está logado.
if (!isset($_SESSION['login'])) {
    // Redireciona o usuário para a página de login.
    header('Location: login_formulario.php');
    // Encerra o script PHP para garantir que o redirecionamento seja efetuado.
    exit;
}
?>
