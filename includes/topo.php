<?php
session_start();
?>

<div class="card">
    <div class="card-header">
        <h1>Projeto Blog em PHP + MySQL IFSP - Leonardo Doná</h1>
    </div>
    <?php if (isset($_SESSION['login'])) : ?>
        <div class="card-body text-right">
            Olá <?php echo $_SESSION['login']['usuario']['nome'] ?>!
            <a href="core/usuario_repositorio.php?acao=logout">Sair</a>
        </div>
    <?php endif ?>
</div>