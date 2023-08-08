<?php
    // Inclui o arquivo que contém funções relacionadas a consultas SQL.
    require_once '../core/sql.php';

    // Define valores para os campos do usuário.
    $id = 1;
    $nome = 'Leonardo Doná';
    $email = "leonardo.dona@aluno.ifsp.edu.br";
    $senha = 'leonardo123';
    $dados = ['nome' => $nome,
              'email' => $email,
              'senha' => $senha];

    // Define a entidade (tabela) com a qual estamos trabalhando.
    $entidade = 'usuario';

    // Define um critério de seleção para consultas.
    $criterio = [['id', '=', $id]];

    // Define os campos que serão selecionados em uma consulta SELECT.
    $campos = ['id', 'nome', 'email'];

    // Imprime os dados e campos para verificação.
    print_r($dados);
    echo '<br>';
    print_r($campos);
    echo '<br>';
    print_r($criterio);
    echo '<br>';
    
    // Teste geração INSERT.
    $instrucao = insert($entidade, $dados);
    echo $instrucao . "<BR>";

    // Teste geração UPDATE.
    $instrucao = update($entidade, $dados, $criterio);
    echo $instrucao.'<BR>';

    // Teste geração SELECT.
    $instrucao = select($entidade, $campos, $criterio);
    echo $instrucao.'<BR>';

    // Teste geração DELETE.
    $instrucao = delete($entidade, $criterio);
    echo $instrucao.'<BR>';
?>
