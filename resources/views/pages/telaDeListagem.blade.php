<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="/css/listagem.css">
</head>
<body>
    <header>
        <h1>Listagem de usuários</h1>
    </header>

    <table>

        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>cpf</th>
        </tr>

        @foreach ($users->all() as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <th>{{ $user->name }}</th>
                <th>{{ $user->email }}</th>
                <th>{{ $user->cpf }}</th>
            </tr>
        @endforeach

    </table>

</body>
</html>
