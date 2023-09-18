<?php

// Função para estabelecer uma conexão com o banco de dados MySQL.
function conecta() : mysqli
{
    // Configurações de conexão com o banco de dados.
    $servidor = 'localhost'; // Nome do servidor MySQL.
    $banco = 'blog'; // Nome do banco de dados.
    $port = 3306; // Porta do servidor MySQL.
    $usuario = 'root'; // Nome de usuário do MySQL.
    $senha = ''; // Senha do MySQL.

    // Tenta estabelecer a conexão com o servidor MySQL.
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    // Verifica se a conexão foi bem-sucedida.
    if (!$conexao) {
        echo 'Erro: Não foi possível conectar ao MySql.' . PHP_EOL;
        echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;

        // Retorna null para indicar que a conexão não foi estabelecida com sucesso.
        return null;
    }

    // Retorna o objeto mysqli representando a conexão bem-sucedida.
    return $conexao;
}

// Função para desconectar do banco de dados.
function desconecta($conexao)
{
    // Fecha a conexão com o banco de dados usando o objeto $conexao.
    mysqli_close($conexao);
}

?>
