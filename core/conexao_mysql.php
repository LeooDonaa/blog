<?php
function conecta() : mysqli
{
    // Configurações para conectar ao banco de dados MySQL
    $servidor = 'localhost';  // Endereço do servidor MySQL
    $banco = 'blog';          // Nome do banco de dados
    $port = 3307;             // Porta do servidor MySQL (pode variar dependendo da configuração)
    $usuario = 'root';        // Nome de usuário do MySQL
    $senha = '';              // Senha do MySQL (deixe em branco se não tiver senha)

    // Tenta estabelecer a conexão com o MySQL
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    // Verifica se a conexão foi bem-sucedida ou se ocorreu um erro
    if (!$conexao) {
        echo 'Erro: Não foi possível conectar ao MySql.' . PHP_EOL;
        echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        return null;  // Retorna null para indicar uma falha na conexão
    }

    return $conexao;  // Retorna o objeto de conexão MySQL se a conexão foi bem-sucedida
}

function desconecta($conexao){
    // Fecha a conexão com o MySQL
    mysqli_close($conexao);
}
?>
