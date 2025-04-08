<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login Vulnerável</title>
</head>
<body>
    <h1>Login Inseguro (SQL Injection)</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Nome:</label><br>
        <input type="text" name="name"><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
