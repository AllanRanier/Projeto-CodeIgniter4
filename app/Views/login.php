<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <title>Login</title>
</head>

<body>
    <form action="<?= base_url('page/logar') ?>" class="form-login" method="POST">
        <div class="login-card card">
            <div class="card-header">
                <h3>Login</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php isset($usuario) ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" value="<?php isset($senha) ?>">
                </div>
            </div>
            <div class="card-footer" style="align-items: center;">
                <button class="btn btn-lg btn-primary">Entrar</button>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <a href="/page/register" class="p-2 bd-highlight">Criar conta</a>
                </div>
            </div>
        </div>
    </form>


</body>

</html>