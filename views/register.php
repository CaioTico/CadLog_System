<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se </title>
</head>
<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="nome">Email</label>
            <input type="text" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil"></select>]
            <option value="admin">Admin</option>
            <option value="gestor">Gestor</option>
            <option value="colaborador">Colaborador</option>

            <button type="submit">Cadastrar</button>
            <a href="">Voltar ao Login</a>
        </form>
    </div>
</body>
</html>