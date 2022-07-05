<?php
include('config.php');
require_once('repository/funcionarioRepository.php');

$id = $_SESSION['id'];
$funcionario = fnLocalizaFuncionariosPorId($id);
?>
<!doctype html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Edição de funcionario</legend>
            <form action="editaFuncionario.php" method="post" class="form">
                <div class="card col-4 offset-4 text-center">
                    <img src="./<?= $funcionario->foto ?>" class="rounded" alt="foto do usuário">
                </div>
                <div>
                    <input type="hidden" name="idfuncionario" id="funcionarioId" value="<?= $funcionario->id ?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="nomeId" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome" value="<?= $funcionario->nome ?>">
                    <div id="helperNome" class="form-text">Informe o nome completo</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="emailId" class="form-label">E-mail</label>
                    <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o e-mail" value="<?= $funcionario->email ?>">
                    <div id="helperEmail" class="form-text">Informe o e-mail</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="cpfId" class="form-label">CPF</label>
                    <input type="text" name="cpf" id="cpfId" class="form-control" placeholder="Informe o CPF" value="<?= $funcionario->cpf ?>">
                    <div id="helperCpf" class="form-text">Informe o CPF</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <?php include("rodape.php"); ?>
    <script src="js/base64.js"></script>
</body>

</html>