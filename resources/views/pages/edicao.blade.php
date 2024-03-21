<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de Edição</title>
    <link rel="stylesheet" href="/css/edicao.css">
</head>
<body>
    <header>Tela de edição</header>
    @if (@session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form method="post" action="{{ route('user.upgrade', $user) }}">
        @csrf
        @method('PUT')
    </form>
</body>
</html>
