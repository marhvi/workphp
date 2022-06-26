<?php 
    include('config.php');
    require_once('./funcionarioRepository.php');
    $notificacao = filter_input(INPUT_GET, 'notify', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!doctype html>

<html lang="pt_BR">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem funcionarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>

  <body>
    <?php include('C:/xampp2/htdocs/SGF/repository/navbar.php'); ?>
    <div class="col-6 offset-3">
    <table class="table table-stripped">
    <thead>
        <td>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data cadastro</th>
            <th colspan="2">Gerenciar</th>
        </td>

    </thead>
    <tbody>
      <?php foreach(fnLocalizaFuncionariosPorNome($nome) as $funcionario):?>
        <tr>
            <td><?= $funcionario->id ?></td>
            <td><?= $funcionario->nome ?></td>
            <td><?= $funcionario->email ?></td>
            <td><?= $funcionario->cpf ?></td>
            <td><?= $funcionario->created_at ?></td>
            <td><a href="formulario-edita-funcionario.php?id=<?= $funcionario->id ?>">Editar</a></td>
            <td><a onclick="return confirm ('Deseja realmente excluir?');" href="excluirfuncionario.php?id=<?= $funcionario->id ?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <?php if(isset($notificacao)):?>
    <tfoot>
      <tr>
        <td colspan="7"><?= $notificacao ?></td>
      </tr>
    </tfoot>
    </table>
      <?php endif; ?>
    </div>
<?php include('rodape.php'); ?>
  </body>
</html>